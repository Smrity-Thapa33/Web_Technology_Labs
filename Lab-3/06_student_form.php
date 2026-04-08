<?php
$conn = mysqli_connect("localhost","root","","test");

$name = $_POST['name'];
$age = $_POST['age'];

$sql = "INSERT INTO students(name,age) VALUES('$name','$age')";
mysqli_query($conn,$sql);

echo "Data Inserted";
?>