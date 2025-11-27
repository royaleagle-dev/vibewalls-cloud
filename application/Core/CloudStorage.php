<?php
class CloudStorage {
    private $bucketName;
    
    public function __construct($bucketName = null) {
        // Use environment variable or default bucket name
        $this->bucketName = $bucketName ?: getenv('GCS_BUCKET_NAME') ?: 'vibewalls-storage';
    }
    
    /**
     * Download file from Cloud Storage to local path
     */
    public function downloadFile($remotePath, $localPath) {
        try {
            $accessToken = $this->getAccessToken();
            if (!$accessToken) {
                throw new Exception("Could not get access token for Cloud Storage");
            }
            
            $url = "https://storage.googleapis.com/storage/v1/b/{$this->bucketName}/o/" . 
                   urlencode($remotePath) . "?alt=media";
            
            $ch = curl_init();
            curl_setopt_array($ch, [
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HTTPHEADER => [
                    "Authorization: Bearer {$accessToken}",
                ],
            ]);
            
            $fileData = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $error = curl_error($ch);
            curl_close($ch);
            
            if ($httpCode === 200) {
                $bytesWritten = file_put_contents($localPath, $fileData);
                if ($bytesWritten === false) {
                    throw new Exception("Failed to write file to: $localPath");
                }
                
                error_log("✅ Downloaded: $remotePath → $localPath ($bytesWritten bytes)");
                return true;
            } else if ($httpCode === 404) {
                error_log("⚠️ File not found in Cloud Storage: $remotePath");
                return false; // File doesn't exist yet (first time)
            } else {
                throw new Exception("Download failed with HTTP $httpCode: $error");
            }
            
        } catch (Exception $e) {
            error_log("❌ Cloud Storage download error: " . $e->getMessage());
            return false;
        }
    }
    
    /**
     * Upload file to Cloud Storage
     */
    public function uploadFile($localPath, $remotePath) {
        try {
            if (!file_exists($localPath)) {
                throw new Exception("Local file does not exist: $localPath");
            }
            
            $accessToken = $this->getAccessToken();
            if (!$accessToken) {
                throw new Exception("Could not get access token for Cloud Storage");
            }
            
            $fileContent = file_get_contents($localPath);
            $fileSize = strlen($fileContent);
            
            $url = "https://storage.googleapis.com/upload/storage/v1/b/{$this->bucketName}/o?uploadType=media&name=" . 
                   urlencode($remotePath);
            
            $ch = curl_init();
            curl_setopt_array($ch, [
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $fileContent,
                CURLOPT_HTTPHEADER => [
                    "Authorization: Bearer {$accessToken}",
                    "Content-Type: application/octet-stream",
                ],
            ]);
            
            $response = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $error = curl_error($ch);
            curl_close($ch);
            
            if ($httpCode === 200) {
                error_log("✅ Uploaded: $localPath → $remotePath ($fileSize bytes)");
                return true;
            } else {
                throw new Exception("Upload failed with HTTP $httpCode: $error");
            }
            
        } catch (Exception $e) {
            error_log("❌ Cloud Storage upload error: " . $e->getMessage());
            return false;
        }
    }
    
    /**
     * Check if file exists in Cloud Storage
     */
    public function fileExists($remotePath) {
        try {
            $accessToken = $this->getAccessToken();
            if (!$accessToken) return false;
            
            $url = "https://storage.googleapis.com/storage/v1/b/{$this->bucketName}/o/" . 
                   urlencode($remotePath);
            
            $ch = curl_init();
            curl_setopt_array($ch, [
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_NOBODY => true, // HEAD request
                CURLOPT_HTTPHEADER => [
                    "Authorization: Bearer {$accessToken}",
                ],
            ]);
            
            curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            
            return $httpCode === 200;
            
        } catch (Exception $e) {
            error_log("❌ Cloud Storage existence check error: " . $e->getMessage());
            return false;
        }
    }
    
    /**
     * Get access token from Cloud Run metadata server
     */
    private function getAccessToken() {
        try {
            $ch = curl_init();
            curl_setopt_array($ch, [
                CURLOPT_URL => 'http://metadata.google.internal/computeMetadata/v1/instance/service-accounts/default/token',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HTTPHEADER => ['Metadata-Flavor: Google'],
                CURLOPT_TIMEOUT => 2,
            ]);
            
            $response = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            
            if ($httpCode === 200) {
                $data = json_decode($response, true);
                return $data['access_token'] ?? null;
            } else {
                error_log("⚠️ Not in Cloud Run environment (cannot get access token)");
                return null;
            }
            
        } catch (Exception $e) {
            error_log("⚠️ Access token error (probably local development): " . $e->getMessage());
            return null;
        }
    }
    
    /**
     * Get bucket info for debugging
     */
    public function getBucketInfo() {
        return [
            'bucket_name' => $this->bucketName,
            'environment' => $this->getAccessToken() ? 'cloud' : 'local'
        ];
    }
}
?>