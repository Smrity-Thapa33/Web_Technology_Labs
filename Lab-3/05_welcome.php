<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>

<h2>Welcome <?php echo $_SESSION['user']; ?> 🎉</h2>

<p>Login Successful!</p>

</body>
</html>