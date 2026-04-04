<?php
echo "Name: " . $_POST['name'] . "<br>";
echo "Gender: " . $_POST['gender'] . "<br>";

echo "Hobbies: ";
if (!empty($_POST['hobby'])) {
    foreach ($_POST['hobby'] as $h) {
        echo $h . " ";
    }
}

echo "<br>Country: " . $_POST['country'];
?>