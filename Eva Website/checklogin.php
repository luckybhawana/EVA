<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to EVA</title>
</head>
<body>
<?php
	ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);
//Attempt to Connect
include 'connectServer.php';
include 'connectDB.php';
session_start();
$uname = $_POST['UI'];
$pword = $_POST['PW'];
$uname = stripslashes($uname);
$pword = stripslashes($pword);
$uname = mysql_real_escape_string($uname);
$pword = mysql_real_escape_string($pword);
$sql = "SELECT * FROM USER_DIRECTORY WHERE USERNAME = '$uname' AND PASSWORD = '$pword'";
$result = mysql_query($sql);
$count = mysql_num_rows($result);
if($count == 1)
{
	$_SESSION['uname'] = $uname;
	$_SESSION['pword'] = $pword;
	header("location: home.php");
}
else{
	header("location: loginunsuccesful.php");
}
?>		
</body>
</html>
