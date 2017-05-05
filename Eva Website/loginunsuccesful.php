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
<title>Login Error</title>
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
			<h1 class = "centerIT">Login</h1>
			<br />
			<form action = "checklogin.php"  method= "post" onsubmit="return checkLogin(this);">
			<h4 class = "centerIT"><input class = "textbox" name = "UI" size = "30" type = "text" placeholder = "Username" required oninvalid="this.setCustomValidity('Enter User Name Here')" oninput="setCustomValidity('')"/><br /></h4>
			<h4 class = "centerIT"><input  class = "textbox" name = "PW" size = "30" type = "password" placeholder = "Password" required oninvalid="this.setCustomValidity('Enter Password Here')" oninput="setCustomValidity('')"/><br /></h4>
			<h4 class = "centerIT" ><font color = "red">Incorrect password or username</font></h4>
			<p class = "centerIT"><input type = "submit" name = "entra" value = "LOG IN"></input></p>			
			</form>
<br />
<br />
<p class = "centerIT"><a href = "forgotLogin.php">Forgot Login Information?</a></p>
			</div>

			
</body>
</html>
