<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title> UploadingPictures </title>
</head>

<body>

<?php
// Address error handling

ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);

//Attempt to Connect
include 'connectServer.php';
include 'connectDB.php';
	session_start();
$UI = $_SESSION['UI'];
$file = $_FILES['image']['tmp_name'];


if (!isset($file))
	echo "Please select any image.";
else
{
	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name = addslashes($_FILES['image']['name']);
	$image_size = getimagesize($_FILES['image']['tmp_name']);
	if ($image_size == FALSE)
		//echo "This is not an image.";
	header("location: Settings.php");
	else
	{
	$sql = "UPDATE USER_DIRECTORY SET USER_PIC = '$image', USER_PIC_DESC = '$image_name' WHERE USERNAME = '$UI'";
	$result = mysql_query($sql);
	$count = mysql_num_rows($result);
	
	header("location: home.php");
	
	}
}



?>


</body>
</html>
