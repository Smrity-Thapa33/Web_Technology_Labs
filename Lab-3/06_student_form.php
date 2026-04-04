<?php
// Q6: Store student details into database

$conn = mysqli_connect("localhost", "root", "", "studentdb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name    = $_POST['name'];
$address = $_POST['address'];
$phone   = $_POST['phone'];
$age     = $_POST['age'];
$gender  = isset($_POST['gender']) ? $_POST['gender'] : "Not selected";

$sql = "INSERT INTO students (name, address, phone, age, gender) 
        VALUES ('$name', '$address', '$phone', '$age', '$gender')";

if (mysqli_query($conn, $sql)) {
    echo "<h2 style='color:green;'> Student details saved successfully!</h2>";
    echo "<a href='06_student_form.html'>Go Back</a>";
} else {
    echo "<h2 style='color:red;'> Error: " . mysqli_error($conn) . "</h2>";
}

mysqli_close($conn);
?>