<?php

if ($connection = @mysql_connect ('localhost', 'LB8363', '23Shwasted')){
	
}
else {
	die('<p>Could not connect to MySQL because: <b>' .mysql_error() .
	'</b></p>');
}
?>