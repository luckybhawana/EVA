<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
<link rel="StyleSheet" href="style.css" type="text/css" media="screen">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Eva Login or Register</title>
 <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript" src="jquery.min.js"></script>
<!--<SCRIPT LANGUAGE="JavaScript" src="login.js"></SCRIPT>-->
<SCRIPT LANGUAGE="JavaScript" src="register.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript" src="tabs.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript" src="onLogin.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript" src="rememberMe.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript" src="timingSafe.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript" src="toggle.js"></SCRIPT>
<style type = "text/css">

</style>



</head>

<body style = "text-align: center;">
<?php
	ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);
//Attempt to Connect
//include 'connectServer.php';
//include 'connectDB.php';
?>
<div id = 'content' style = "background-color: #333; opacity: 0.8;">

<br />
<br />
<br />
<br />
<br />
<br />

			<h1 class = "centerIT">Login</h1>
			<br />
			<form action = "checklogin.php"  method= "post" onsubmit="return checkLogin(this);">
			<p class = "centerIT"><input class = "textbox" name = "UI" size = "30" type = "text" placeholder = "Username" required oninvalid="this.setCustomValidity('Enter User Name Here')" oninput="setCustomValidity('')"/><br /></p>
			<p class = "centerIT"><input  class = "textbox" name = "PW" size = "30" type = "password" placeholder = "Password" required oninvalid="this.setCustomValidity('Enter Password Here')" oninput="setCustomValidity('')"/><br /></p>
			<p class = "centerIT"><input type = "submit" name = "entra" value = "LOG IN"></input></p>			
			</form>
				
			<br />
			<h1 class = "centerIT">Register</h1>
			<br />
			<br />
			<form action = "Welcome.php"  method= "post" onsubmit="return checkRegister(this);">			
			<p class = "centerIT"><input class = "textbox" name = "primero" size = "30" type = "text" placeholder = "First Name" required oninvalid="this.setCustomValidity('Required')" oninput="setCustomValidity('')"/> <input name = "apellido" size = "30" class = "textbox" height = "50" type = "text" placeholder = "Last Name" required oninvalid="this.setCustomValidity('Required')" oninput="setCustomValidity('')"/><br /></p>
			<p class = "centerIT"><input class = "textbox" name = "organization" size = "30" type = "text" placeholder = "Organization Name" /><br /></p>
			<p class = "centerIT"><input class = "textbox" name = "nombre" size = "30" type = "text" placeholder = "Username" required oninvalid="this.setCustomValidity('Required')" oninput="setCustomValidity('')"/><br /></p>
			<p class = "centerIT"><input class = "textbox" name = "correo" size = "30" type = "email" placeholder = "School Email" required oninvalid="this.setCustomValidity('Required')" oninput="setCustomValidity('')"/><br /></p>
			<p class = "centerIT"><input class = "textbox" name = "confirmcorreo" size = "30" type = "email" placeholder = "Re-Enter School Email" required oninvalid="this.setCustomValidity('Required')" oninput="setCustomValidity('')"/><br /></p>
			<h5 class = "centerIT">Password musts: 1 uppercase, 1 lowercase, of length 6 or higher </h5>
			<p class = "centerIT"><input class = "textbox" name = "clave" size = "30" type = "password" placeholder = "New Password" required oninvalid="this.setCustomValidity('Required')" oninput="setCustomValidity('')"/><br /></p>
			<p class = "centerIT"><input class = "textbox" name = "claveDos" size = "30" type = "password" placeholder = "Confirm Password" required oninvalid="this.setCustomValidity('Required')" oninput="setCustomValidity('')"/><br /></p>
			<p class = "centerIT"><input type = "submit" name = "registrar" value = "Register"></input></p>	
			
			</form>

<br />
<h4 class = "centerIT"><a href = "about.html">What is EVA?</a></h4>
</div>


</body>
</html>
