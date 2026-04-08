<?php
<<<<<<< HEAD

$username = $_POST['username'];
$password = $_POST['password'];

// Hardcoded credentials
if($username == "admin" && $password == "1234"){
    header("Location: 05_welcome.php");
    exit();
} else {
    echo "<h3>Invalid Username or Password</h3>";
=======
session_start();

// Debug: Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    
    // Debug output (remove after testing)
    echo "Username: " . htmlspecialchars($username) . "<br>";
    echo "Password: " . htmlspecialchars($password) . "<br>";
    
    // Hardcoded credentials
    if ($username == "admin" && $password == "1234") {
        $_SESSION['user'] = $username;
        header("Location: 05_welcome.php");
        exit();
    } else {
        echo "<h3 style='color: red;'>Invalid Username or Password</h3>";
        echo "<br><a href='05_login.html'>Back to Login</a>";
    }
} else {
    echo "Form was not submitted via POST";
>>>>>>> f9d962f971fc1644e837399ae456d7f9fca25174
}

?>