<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Get Requirements</title>
<link rel="StyleSheet" href="style.css" type="text/css" media="screen">
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
<body style = "background-color: #333;">
<?php
	ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);
//Attempt to Connect
include 'connectServer.php';
include 'connectDB.php';
session_start();
	session_start();
$UI = $_SESSION['UI'];
$_SESSION['UI'] = $UI;
$eventName = $_POST['eventName'];
$eventDate = $_POST['eventDate'];
$eventTime = $_POST['eventTime'];
$eventLocation = $_POST['eventLocation'];
$eventEstCost = $_POST['eventEstCost'];
$eventName = stripslashes($eventName);
$eventDate = stripslashes($eventDate);
$eventTime = stripslashes($eventTime);
$eventLocation = stripslashes($eventLocation);
$eventEstCost = stripslashes($eventEstCost);
$eventName = mysql_real_escape_string($eventName);
$eventLocation = mysql_real_escape_string($eventLocation);
$eventTime = mysql_real_escape_string($eventTime);
$eventDate = mysql_real_escape_string($eventDate);
$eventEstCost = mysql_real_escape_string($eventEstCost);
$_SESSION['eventName'] = $eventName;
$_SESSION['eventDate'] = $eventDate;
$_SESSION['eventTime'] = $eventTime;
$_SESSION['eventLocation'] = $eventLocation;
$_SESSION['eventEstCost'] = $eventEstCost; 
?>
<section class = "event-Stripe" style = "background-color: #51c3c1; opacity: .9;">
<a style = "text-align: left; font-size: 30px;" href = "home.php">⇱</a><h1 class = "center-IT">Choose your Requirements</h1>
</section>
<div id = 'content'>
<br />
<form action = 'sendToEvent.php'  method= 'post'>
<?php
$storeSQL = "SELECT * FROM STORE";
if ($r = mysql_query($storeSQL))
{
		echo "<hr>";
	while ($row = mysql_fetch_array($r)){

		$prod = $row['PRODUCT_STORE_ID'];
		$ps_ID = $row['PRODUCT_STORE_ID'];
		echo "<table width = '100%'>";
		echo "<td width = '50%'>";
		echo "<h4>Name: " . $row['STORE_NAME'] . "<br /> Address: " . $row['STORE_ADDRESS'] . "<br /> Phone number: " . $row['STORE_CONTACT'] . "<br />";
		echo "Type: " . $row['STORE_TYPE'] . "<br /> Website: " . $row['STORE_WEBSITE'] . "<br /> Store Email: " . $row['STORE_EMAIL'] . "</h4><br />";
		echo "<input type = 'checkbox' name = 'requirement[]' value = $ps_ID ></input>";

		echo "</td>";
		echo "<td>";
		echo "<div class='verticalLine'>";
		$prodSQL = "SELECT * FROM PRODUCT WHERE PRODUCT_STORE_ID = '$prod'";
		if ($rTwo = mysql_query($prodSQL))
{
	while ($rowTwo = mysql_fetch_array($rTwo)){
		echo "<h4>Product: " . $rowTwo['PRODUCT_NAME'] . "<br /> Cost: " . $rowTwo['PRODUCT_COST'] . "<br />";	
		echo "<hr>";	
	}
}
		echo "</div>";
		echo "</td>";
		echo "</table>";
echo "<hr>";	
		$count++;
}
}
?>
<p class = "centerIT"><input type = "submit" name = "termina" value = "Finish"></input></p>
</form>
</div>		
</body>
</html>
