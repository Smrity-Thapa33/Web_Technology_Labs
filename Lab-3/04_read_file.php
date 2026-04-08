<?php
$path = __DIR__ . "/04_data.txt";

if (!file_exists($path)) {
    die("File NOT found at: " . $path);
}

$file = fopen($path, "r");

if (!$file) {
    die("Cannot open file (permission or path issue)");
}

echo "<table border='1'>";
echo "<tr><th>File Data</th></tr>";

while (($line = fgets($file)) !== false) {
    echo "<tr><td>" . htmlspecialchars($line) . "</td></tr>";
}

echo "</table>";

fclose($file);
?>