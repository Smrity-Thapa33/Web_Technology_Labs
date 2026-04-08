<?php
<<<<<<< HEAD
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
=======

$file = fopen("04_data.txt", "r");

if (!$file) {
    die("Error: Could not open data.txt");
}

echo "<h2>File Data</h2>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Name</th><th>Age</th></tr>";

while(!feof($file)) {
    $line = fgets($file);
    
    if(trim($line) != "") {
        $data = explode(",", $line);
        
        echo "<tr>";
        echo "<td>".$data[0]."</td>";
        echo "<td>".(isset($data[1]) ? trim($data[1]) : "N/A")."</td>";
        echo "</tr>";
    }
>>>>>>> f9d962f971fc1644e837399ae456d7f9fca25174
}

echo "</table>";

fclose($file);
<<<<<<< HEAD
=======

>>>>>>> f9d962f971fc1644e837399ae456d7f9fca25174
?>