<?php

class UUID{

    public static function generateUUID() {
        // Generate 16 random bytes
        $data = random_bytes(16);

        // Set the version (4) and variant (RFC 4122) bits
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // Set version to 0100
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // Set variant to 10

        // Format the UUID string
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

}
?>