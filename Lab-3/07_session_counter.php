<?php
// Q7: Store page views count in SESSION, increment on each refresh and show on webpage

session_start();
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}
$_SESSION['count']++;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page View Counter</title>
</head>
<body>
    <h1>Page View Counter</h1>
    <p>You have visited this page <b><?php echo $_SESSION['count']; ?></b> times!</p>
    <a href="q7.php">Refresh</a> |
    <a href="reset.php">Reset Counter</a>

</body>
</html>