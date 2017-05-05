<!doctype html>
<html>
<head>
<link rel="StyleSheet" href="style.css" type="text/css" media="screen">
<meta charset="UTF-8">
<title>ApplyingChanges</title>
</head>

<body>
<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL & ~E_NOTICE);
	//Attempt to Connect
	include 'connectServer.php';
	include 'connectDB.php';
	session_start();

$UI = $_SESSION['UI'];

$newPassword = $_POST['newPassword'];
$confirmnewPassword = $_POST['confirmnewPassword'];

$query =  "UPDATE USER_DIRECTORY SET PASSWORD = '$newPassword' WHERE USERNAME = '$UI'";

mysql_query($query);
		header("location: home.php");
?>	

		
</body>
</html>
