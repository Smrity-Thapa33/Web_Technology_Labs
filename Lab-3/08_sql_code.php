<?php
// 1. Connect to MySQL server
$servername = "localhost";
$username = "root";
$password = ""; // your MySQL password

$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. Create database
$sql = "CREATE DATABASE IF NOT EXISTS my_database";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// 3. Select the database
$conn->select_db("my_database");

// 4. Create table
$sql = "CREATE TABLE IF NOT EXISTS students (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50),
    age INT
)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// 5. Add a new column
$sql = "ALTER TABLE students ADD COLUMN email VARCHAR(100)";
if ($conn->query($sql) === TRUE) {
    echo "Column added successfully<br>";
} else {
    echo "Error adding column: " . $conn->error . "<br>";
}

$conn->close();
?>