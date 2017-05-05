<!doctype html>
<html>
<head>
<link rel="StyleSheet" href="style.css" type="text/css" media="screen">
<meta charset="UTF-8">
<title>ApplyingChanges</title>
</head>

<body>

<!--<section class = "center-IT event-Stripe"  style = "background-color: #5a5386; opacity: .9;">-->


<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL & ~E_NOTICE);
	//Attempt to Connect
	include 'connectServer.php';
	include 'connectDB.php';
	session_start();

$UI = $_SESSION['UI'];
			

$Username = $_POST['Username'];
$newFName = $_POST['newFName'];
$newLName = $_POST['newLName'];
$newEmail = $_POST['newEmail'];

$query =  "UPDATE USER_DIRECTORY SET F_NAME = '$newFName', L_NAME = '$newLName',SCHOOL_EMAIL = '$newEmail' WHERE USERNAME = '$UI'";

mysql_query($query);



		header("location: home.php");

?>	

<!--<p align = "center"> <h4>Your First Name, Last Name and School Email has been successfully changed </h4> </p>-->
		
		
		
<!--</section>-->
		
</body>
</html>
