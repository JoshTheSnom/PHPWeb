<?php 
session_start();
if ($_SESSION["loggedin"]){
   header( "Location: loremipsum.php" );
}
$_SESSION["username"] = null;
$_SESSION["password"] = null;
$_SESSION["loggedin"] = false;
?>

<html>
<head>
</head>
<body>

<form action= "" method="post" >
Name: <input type="text" name="username"><br>
Password: <input type="text" name="password"><br>
<input type="submit">
</form>
<a href = "register.php">Register instead</a>

  
<?php 
 if (($_POST["username"] == $_SESSION["username"]) && ($_POST["password"] == $_SESSION["password"])){
    $_SESSION["loggedin"] = true;
	header( "Location: loremipsum.php" );
 } else echo "Wrong username or password"

?>
</body>
</html>