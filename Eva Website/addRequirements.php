<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="StyleSheet" href="style.css" type="text/css" media="screen">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Add Requirements</title>
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
<section class = "center-IT event-Stripe" style = "background-color: #51c3c1; opacity: .9;">
<h1 class = "center-IT">Start An Event</h1>
</section>
<br />
<form action = "sendToEvent.php"  method= "post" onsubmit="return checkLogin(this);">
<div id="addinput">
<p class = "centerIT"><a href="#" id="addNew">+</a></p>
<p class = "centerIT">
<input class = "textbox" type="text" id="p_new" size="30" name="p_new" value="" placeholder="Requirement" />
</p>
</div>			
<p class = "centerIT"><input type = "submit" name = "entra" value = "Enter Event"></input></p>			
</form>



</body>
</html>