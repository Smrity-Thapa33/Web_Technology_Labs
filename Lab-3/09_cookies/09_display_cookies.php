<?php

echo "<h1>Cookie Values</h1>";

if (empty($_COOKIE)) {
    echo "<h3 style='color:red;'>No cookies set!</h3>";
    echo "<a href='09_cookies.html'>Set Cookies</a>";
} else {
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr><th>Cookie Name</th><th>Cookie Value</th></tr>";
    
    foreach ($_COOKIE as $key => $value) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($key) . "</td>";
        echo "<td>" . htmlspecialchars($value) . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    
    echo "<br><br>";
    echo "<a href='09_cookies.html'>Set New Cookie</a> | ";
    echo "<a href='09_delete_cookies.php'>Delete All Cookies</a>";
}

?>