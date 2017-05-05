<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to EVA</title>
<link rel="StyleSheet" href="style.css" type="text/css" media="screen">
</head>

<body>
<?php
	ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);
//Attempt to Connect
include 'connectServer.php';
include 'connectDB.php';
session_start();

//create short variable names for slip information
$primero = $_POST['primero'];
$apellido = $_POST['apellido'];
$organization = $_POST['organization'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$confirmcorreo = $_POST['confirmcorreo'];
$clave = $_POST['clave'];
$claveDos = $_POST['claveDos'];
$query =  "INSERT INTO USER_DIRECTORY (F_NAME, L_NAME, SCHOOL_EMAIL, USERNAME, PASSWORD, ORGANIZATION) VALUES ('$primero', '$apellido', '$correo', '$nombre', '$clave', '$organization')";
mysql_query($query);
?>
<div id = 'content' style = "background-color: #333; opacity: 0.8;">
<br />
<br />
<br />
<br />
<h2 class = "centerIT"> Thank you for joining EVA </h2>
<br />
<br />
<h3 class = "centerIT"> EVA is determined to make your event unforgettable.
Our goal is to connect you to amazing individuals in your area that can help make your Event all that you want it to be.
The website allows you to create events and add "stores" to your event. 
Once added you can contact them and recruit them to your event. 
</h3>
<br />
<br />

<h2 class = "centerIT">EVA caters to students at Salisbury University</h1>
<h3 class = "centerIT">
	EVA will have a page dedicated to connecting you to the specific university officials that you must go through to execute an event. 
</h3>
<br />
<br />

			<form action = "login.php"  method= "post">
			<p class = "centerIT"><input type = "submit" name = "entra" value = "Continue to Login"></input></p>			
			</form>
</div>			
</body>
</html>
