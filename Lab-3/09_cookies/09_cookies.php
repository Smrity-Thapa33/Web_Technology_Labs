<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get form data
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $color = isset($_POST['color']) ? trim($_POST['color']) : '';
    $expiration_days = isset($_POST['expiration']) ? (int)$_POST['expiration'] : 7;
    
    // Validate inputs
    if (empty($username) || empty($email) || empty($color)) {
        echo "<h3 style='color:red;'>All fields are required!</h3>";
        echo "<a href='09_cookies.html'>Go Back</a>";
        exit();
    }
    
    // Set cookies (expires after specified days)
    $expiration_time = time() + ($expiration_days * 24 * 60 * 60);
    
    setcookie("username", $username, $expiration_time);
    setcookie("email", $email, $expiration_time);
    setcookie("color", $color, $expiration_time);
    setcookie("expiration_days", $expiration_days, $expiration_time);
    
    echo "<h2 style='color:green;'>Cookies Set Successfully!</h2>";
    echo "<p><strong>Username:</strong> " . htmlspecialchars($username) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>Favorite Color:</strong> " . htmlspecialchars($color) . "</p>";
    echo "<p><strong>Expiration:</strong> " . $expiration_days . " days</p>";
    echo "<br><a href='09_display_cookies.php'>View Cookies</a>";
    echo " | <a href='09_cookies.html'>Set New Cookie</a>";
}

?>