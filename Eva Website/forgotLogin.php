<!doctype html>
<?php
	ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);
//Attempt to Connect
//include 'connectServer.php';
//include 'connectDB.php';
?>
<html>
<head>
<link rel="StyleSheet" href="style.css" type="text/css" media="screen">
<meta charset="UTF-8">
<title>Forgot Email</title>
</head>

<body style = "text-align: center;">
			<div id = 'content' style = "background-color: #333; opacity: 0.9;">
			<a href = "http://acadweb1.salisbury.edu/~LB8363/login.php#" >EVA</a>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
			<h1 class = "centerIT">Get Username and Password</h1>
			<br />
			<form action = "emailUP.php"  method= "post">
			<h4>Enter Username and we will send you an email with your username and password information</h4>	
			<br />
			<h4 class = "centerIT"><input class = "textbox" name = "correo" size = "40" type = "text" placeholder = "Email to receive username and password" required oninvalid="this.setCustomValidity('Enter Email Here')" oninput="setCustomValidity('')"/><br /></h4>
			<p class = "centerIT"><input type = "submit" name = "manda" value = "Send Email"></input></p>			
			</form>
			</div>

			
</body>
</html>
