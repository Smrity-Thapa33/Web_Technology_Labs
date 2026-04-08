<?php

// Delete all cookies by setting expiration time to past
if (!empty($_COOKIE)) {
    foreach ($_COOKIE as $key => $value) {
        setcookie($key, "", time() - 3600); // Expires 1 hour ago
    }
}

echo "<h2 style='color:green;'>All Cookies Deleted!</h2>";
echo "<p>Cookies have been cleared.</p>";
echo "<br><a href='09_cookies.html'>Set New Cookies</a>";

?>