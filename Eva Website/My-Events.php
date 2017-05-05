<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="StyleSheet" href="style.css" type="text/css" media="screen">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>My Events</title>
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
<body >
	<?php
	session_start();
	$UI = $_SESSION['UI'] ;
	ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);
//Attempt to Connect
include 'connectServer.php';
include 'connectDB.php';
?>
<section class = " event-Stripe" style = "background-color: #304159; opacity: .9;">
<a style = "text-align: left; font-size: 30px;" href = "home.php">⇱</a><h1 class = "center-IT">My Events <a href = home.php></a></h1>
</section>
<div id = 'content' style = "background-color: #333;opacity: .9;">
<?php
$query =  "SELECT * FROM EVENT WHERE USERNAME = '$UI' ORDER BY EVENT_DATE ASC"; 
mysql_query($query);
if ($r = mysql_query($query))
{
			echo "<hr>";
	while ($row = mysql_fetch_array($r)){

		
		$eventName = $row['EVENT_NAME'];
		$eventDate = $row['EVENT_DATE'];
		echo "<table width = '100%'>";
		echo "<td width = '50%'>";
		echo "<h3 class = 'centerIT'>Event Name: " . $row['EVENT_NAME']	. "<br/>Event Date: ". $row['EVENT_DATE'] . "<br />Event Time: " . $row['EVENT_TIME'] . "<br />Event Location: ". $row['EVENT_LOCATION'] . "<br />Estimated Cost: " . $row['EST_EVENT_COST'] . "</h3>";
		echo "</td>";
		echo "<td>";
		echo "<div class='verticalLine'>";
		$queryTwo = "SELECT * FROM EVENT_REQUIREMENT WHERE EVENT_NAME = '$eventName'";
		mysql_query($queryTwo);
		if($rTwo = mysql_query($queryTwo))
		{
			echo "<h3 class = 'centerIT'>Store Info: <br/><br/>";
			echo "<hr>";
			while ($rowTwo = mysql_fetch_array($rTwo)){
				$ps_ID = $rowTwo['PRODUCT_STORE_ID'];
				echo "<h3 class = 'centerIT'> Store Name: " . $rowTwo['STORE_NAME'] . "</h3><br/>";
				$storeQuery = "SELECT * FROM STORE WHERE PRODUCT_STORE_ID = '$ps_ID'";
			mysql_query($storeQuery);
		if ($rThree = mysql_query($storeQuery))
		{
			while ($rowThree = mysql_fetch_array($rThree)){
				echo "<h3 class = 'centerIT'>Address: " . $rowThree['STORE_ADDRESS'] . "<br />Phone: " . $rowThree['STORE_CONTACT'] . "<br />Email: " . $rowThree['STORE_EMAIL'] . "<br/>Website: " . $rowThree['STORE_WEBSITE'] . "</h3><br />";
			}
		}
		echo "<hr>";
			}
		}

		echo "</div>";
		echo "</td>";
		echo "</table>";
		echo "<hr>";

		}
}
?>
</div>
</body>
</html>
