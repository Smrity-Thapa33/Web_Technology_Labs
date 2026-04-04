<?php

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
}

echo "</table>";

fclose($file);

?>