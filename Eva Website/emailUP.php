<?php

	ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);
//Attempt to Connect
include 'connectServer.php';
include 'connectDB.php';
$correo = $_POST['correo'];
?>
<?php
$query = "SELECT * FROM USER_DIRECTORY WHERE SCHOOL_EMAIL = '$correo'";
mysql_query($query);
if ($r = (mysql_query($query)))
{
	while ($row = mysql_fetch_array($r)){
		$to      = $correo;
		$subject = 'EVA Username and Password';
		$message = 'Username: '. $row['USERNAME'] . '\r\n' .' Password: '. $row['PASSWORD'];
		$headers = 'From: lbenitez1@gulls.salisbury.edu' . '\r\n' .
    	'Reply-To: lbenitez1@gulls.salisbury.edu' . '\r\n' .
    	'X-Mailer: PHP/' . phpversion();


		if (mail ($to, $subject, $message, $headers)) { 
            echo '<p>Your message has been sent!</p>';
        } else { 
            echo '<p>Something went wrong, go back and try again!</p>'; 
        }

		//header("location: home.php");
}

}

?>