<?php
session_start();
session_destroy();
echo "Clear session";
echo "<br><a href='login.php'>Retry Login</a>";
//header("Location: login.html");
?>