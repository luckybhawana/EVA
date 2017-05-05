<?php

if (@mysql_select_db("LB8363_PROJECT2", $connection)){
}
else {
	die('<p>Could not select the LB8363_PROJECT2 database because: <b>' .mysql_error().'</b></p>');
}
?>