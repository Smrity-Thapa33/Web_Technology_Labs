<?php

$username = $_POST['username'];
$password = $_POST['password'];

// Hardcoded credentials
if($username == "admin" && $password == "1234"){
    header("Location: 05_welcome.php");
    exit();
} else {
    echo "<h3>Invalid Username or Password</h3>";
}

?>