<?php 
session_start();
$_SESSION["loggedin"] = false;
$_SESSION["username"] = null;
$_SESSION["password"] = null;
session_unset();
session_destroy();
?>
<html>
<head></head>
<body>
<p>You've been logged out...</p>
<a href = "login.php">Login</a>
</body>
</html>