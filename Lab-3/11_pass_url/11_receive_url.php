<?php

echo "<h1>Received URL Variables</h1>";

// Check if variables are passed through URL
if (isset($_GET['name']) && isset($_GET['age']) && isset($_GET['city'])) {
    
    // Get variables from URL
    $name = $_GET['name'];
    $age = $_GET['age'];
    $city = $_GET['city'];
    
    // Display the received variables
    echo "<h3>Information Received:</h3>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Age: " . htmlspecialchars($age) . "<br>";
    echo "City: " . htmlspecialchars($city) . "<br>";
    
} else {
    echo "<h3 style='color:red;'>No variables passed!</h3>";
}

echo "<br><br>";
echo "<a href='11_pass_url.html'>Go Back</a>";

?>