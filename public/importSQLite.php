<?php
// Create SQLite database
$sqliteFile = 'vibewalls.sqlite';
$pdo = new PDO("sqlite:$sqliteFile");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Read the cleaned SQL file
$sql = file_get_contents('cleaned_export.sql');

// Split into individual statements
$statements = array_filter(
    array_map('trim', 
        explode(';', $sql)
    )
);

// Execute each statement
foreach ($statements as $statement) {
    if (!empty($statement) && stripos($statement, 'CREATE') !== false) {
        try {
            $pdo->exec($statement);
            echo "✓ Executed: " . substr($statement, 0, 50) . "...\n";
        } catch (Exception $e) {
            echo "✗ Failed: " . $e->getMessage() . "\n";
        }
    }
}

echo "✅ SQLite database created: $sqliteFile\n";
?>