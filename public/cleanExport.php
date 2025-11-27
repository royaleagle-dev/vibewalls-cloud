<?php
$mysqlDump = file_get_contents('vibewalls.sql');

// Remove MySQL-specific statements that SQLite doesn't understand
$patterns = [
    // Remove SET statements
    '/SET[^;]*;/' => '',
    
    // Remove character set and collation
    '/CHARACTER SET[^ ,]+/' => '',
    '/COLLATE[^ ,]+/' => '',
    
    // Remove ENGINE clauses
    '/ENGINE=.*?;/' => ';',
    
    // Remove AUTO_INCREMENT values
    '/AUTO_INCREMENT=[0-9]+/' => '',
    
    // Remove UNSIGNED
    '/UNSIGNED/' => '',
    
    // Remove comments
    '/\/\*![^*]*\*+(?:[^*\/][^*]*\*+)*\//' => '',
    '/\/\*.*?\*\//s' => '',
    '/--.*?$/m' => '',
    
    // Remove backticks
    '/`/' => '',
    
    // Fix ENUM types - convert to TEXT
    "/enum\('([^']+)'\)/i" => "TEXT",
    
    // Fix TIMESTAMP defaults
    "/TIMESTAMP.*?DEFAULT CURRENT_TIMESTAMP/i" => "TEXT DEFAULT CURRENT_TIMESTAMP",
    
    // Remove ON UPDATE clauses
    '/ON UPDATE.*?(?=,|\))/' => '',
    
    // Remove KEY definitions within CREATE TABLE
    '/,\s*KEY[^,]+\([^)]+\)/' => '',
    '/,\s*UNIQUE KEY[^,]+\([^)]+\)/' => '',
    '/,\s*FULLTEXT KEY[^,]+\([^)]+\)/' => '',
    
    // Remove table comments
    "/COMMENT='[^']*'/" => '',
];

$cleanSql = $mysqlDump;
foreach ($patterns as $pattern => $replacement) {
    $cleanSql = preg_replace($pattern, $replacement, $cleanSql);
}

// Additional cleanup
$cleanSql = str_replace('AUTO_INCREMENT', 'AUTOINCREMENT', $cleanSql);
$cleanSql = str_replace('int(11)', 'INTEGER', $cleanSql);
$cleanSql = str_replace('tinyint(1)', 'INTEGER', $cleanSql);

// Split into lines and filter out problematic statements
$lines = explode("\n", $cleanSql);
$cleanLines = [];

foreach ($lines as $line) {
    $trimmed = trim($line);
    
    // Skip problematic lines
    if (empty($trimmed)) continue;
    if (strpos($trimmed, '/*!') === 0) continue;
    if (strpos($trimmed, 'SET ') === 0) continue;
    if (strpos($trimmed, 'LOCK TABLES') === 0) continue;
    if (strpos($trimmed, 'UNLOCK TABLES') === 0) continue;
    if (strpos($trimmed, 'DROP TABLE') === 0) continue;
    
    $cleanLines[] = $line;
}

$cleanSql = implode("\n", $cleanLines);

file_put_contents('cleaned_export.sql', $cleanSql);
echo "✅ Cleaned SQL file created: cleaned_export.sql\n";
echo "Removed MySQL-specific syntax and prepared for SQLite import.\n";
?>