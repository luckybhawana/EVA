<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="StyleSheet" href="style.css" type="text/css" media="screen">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Start Event</title>
<script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<SCRIPT LANGUAGE="JavaScript" src="dynamicInput.js"></SCRIPT>
<style type = "text/css">
.event-Stripe
{
width: 100%;
height: 100px;
position: relative;	
margin: -8px;
padding: 12px 8px;
}
</style>
</head>
<body>
	<?php
		session_start();
$UI = $_SESSION['UI'];	
$_SESSION['UI'] = $UI;	
	?>
<section class = "event-Stripe" style = "background-color: #51c3c1; opacity: .9;">
<a style = "text-align: left; font-size: 30px;" href = "home.php">⇱</a><h1 class = "center-IT">Start An Event</h1>
</section>
<br />
<form action = "getRequirements.php"  method= "post" onsubmit="return checkLogin(this);">
			<p class = "centerIT"><input class = "textbox" name = "eventName" size = "30" type = "text" placeholder = "Event Name" required oninvalid="this.setCustomValidity('Enter Event Name Here')" oninput="setCustomValidity('')"/><br /></p>
			<p class = "centerIT"><input class = "textbox" name = "eventLocation" size = "30" type = "text" placeholder = "Event Location" required oninvalid="this.setCustomValidity('Enter Event Location Here')" oninput="setCustomValidity('')"/><br /></p>
			<p class = "centerIT"><input  class = "textbox" name = "eventDate" size = "30" type = "date" placeholder = "Event Date" required oninvalid="this.setCustomValidity('Enter Date Here')" oninput="setCustomValidity('')"/></p>
			<p class = "centerIT"><input  class = "textbox" name = "eventTime" size = "30" type = "time" placeholder = "Event Time" required oninvalid="this.setCustomValidity('Enter time Here')" oninput="setCustomValidity('')"/><br /></p>
			<p class = "centerIT"><input  class = "textbox" name = "eventEstCost" size = "30" type = "text" placeholder = "Estimated Cost" required oninvalid="this.setCustomValidity('Enter Estimated Cost')" oninput="setCustomValidity('')"/><br /></p>
			<p class = "centerIT"><input type = "submit" name = "entra" value = "Continue to Requirements"></input></p>	
</form>
</body>
</html>

