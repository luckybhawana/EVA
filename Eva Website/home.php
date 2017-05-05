<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
<link rel="StyleSheet" href="style.css" type="text/css" media="screen">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Home</title>

<style type = "text/css">
.event-Stripe
{
height: 100px;
position: relative;	
margin: 0px;
padding: 12px 8px;
}

</style>
</head>

<body>
<?php
	session_start();
$UI = $_SESSION['uname'];
$_SESSION['UI'] = $UI;
	ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);
//Attempt to Connect
include 'connectServer.php';
include 'connectDB.php';

?>
<div id = 'content' style = "opacity: .9;">
<section class = "center-IT event-Stripe" style = "background-color: #51c3c1;">
<h1 class = "center-IT"><a href = "Start-Event.php">Start An Event</a></h1>
</section>

<section class = "center-IT event-Stripe" style = "background-color: #4e98cf;">
<h1 class = "center-IT"><a href = "Event-Directory.php">Event Directory</a></h1>
</section>

<section class = "event-Stripe" style = "background-color: #304159;">
<h1 class = "center-IT"><a href = "My-Events.php">My Events</a></h1>
</section>

<section class = "center-IT event-Stripe" style = "background-color: #5a5386;">
<h1 class = "center-IT"><a href = "Settings.php">Settings</a></h1>
</section>

<section class = "center-IT event-Stripe" style = "background-color: #524364;">
<h1 class = "center-IT"><?php
$query =  "SELECT * FROM USER_DIRECTORY WHERE USERNAME = '$UI'"; 

$queryTwo = "SELECT USER_PIC FROM USER_DIRECTORY WHERE USERNAME = '$UI'";

mysql_query($query);

if ($r = (mysql_query($query)))
{

	while ($row = mysql_fetch_array($r)){
		print "{$row['USERNAME']}";
}

}
mysql_query($queryTwo);

if ($rTwo = (mysql_query($queryTwo)))
{

	while ($rowTwo = mysql_fetch_assoc($rTwo)){
		$image = $rowTwo['USER_PIC'];
		$output ='<img src="data:image/jpeg;base64,' . base64_encode($image) . '" alt="High Council" width="100px" height="100px"/>';
        echo $output;
}

}
?></h1>
</section>
<section class = "center-IT event-Stripe" style = "background-color: #543948;">
<h1 class = "center-IT"><a href = "login.php">Log Out</a></h1>
</section>
</div>
</body>
</html>
