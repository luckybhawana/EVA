<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Almost Done</title>
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
$eventName = $_SESSION['eventName'];
$eventDate = $_SESSION['eventDate'];
$eventTime = $_SESSION['eventTime'];
$eventLocation = $_SESSION['eventLocation'];
$eventEstCost = $_SESSION['eventEstCost'];
$query =  "INSERT INTO EVENT (EVENT_NAME, EVENT_LOCATION, USERNAME, EVENT_DATE, EVENT_TIME, EST_EVENT_COST) VALUES ('$eventName', '$eventLocation', '$UI', '$eventDate', '$eventTime', '$eventEstCost')";
mysql_query($query);
?>
<?php
$eventName = $_SESSION['eventName'];
$requirements= $_POST['requirement'];
    $N = count($requirements);
    for($i=0; $i < $N; $i++)
    {
	$getStore = "SELECT * FROM STORE WHERE PRODUCT_STORE_ID = '$requirements[$i]'";	
	mysql_query($getStore);
	if ($rStore = mysql_query($getStore))
{
while ($rowStore = mysql_fetch_array($rStore)){
	$storeName = $rowStore['STORE_NAME'];
	$ps_ID = $rowStore['PRODUCT_STORE_ID'];
	$queryTwo = "INSERT INTO EVENT_REQUIREMENT (EVENT_NAME, STORE_NAME, PRODUCT_STORE_ID) VALUES ('$eventName', '$storeName', '$ps_ID')";
	mysql_query($queryTwo);
	}
}
    }
		header("location: My-Events.php");
?>		
</body>
</html>
