
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">

<!--Header Section-->

<head>

<LINK REL=StyleSheet HREF="style.css" TYPE="text/css" MEDIA=screen>
<meta http-equiv = "Content-Language" content = "en-us"/>
<meta http-equiv = "Content-Type" content = "text/html; charset = utf-8" />
<title>Service Category</title>

<style type = "text/css">

</style>
 <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('.tabs .tab-links a').on('click', function(e)  {
        var currentAttrValue = jQuery(this).attr('href');
 
        // Show/Hide Tabs
        jQuery('.tabs ' + currentAttrValue).fadeIn(1500).siblings().hide();
 
        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
 
        e.preventDefault();
});
})

</script>

<SCRIPT type=text/javascript>
/*  <![CDATA[ */ 
function Submit(form)
{
  if (validateText()==false)
   {
      alert("Required data missing in Step 1");
      return false;
   }
  return true;
}

function validateText()
{
   var catNum=document.forms[0].catNum.value;
      if (catNum.length==0) return false;
   var carDescription=document.forms[0].catDescription.value;
      if (catDescription.length==0)  return false;

   return true;
}

/* ]]> */
</SCRIPT>
</head>


<body style="margin:0px;">
<?php


	//create short variable names for boat owner info
	$edit = $_POST['edit'];
	$ownNum = $_POST['ownNum'];
	ini_set('display_errors',1);
	
error_reporting(E_ALL & ~E_NOTICE);

//Attempt to Connect

if ($connection = @mysql_connect ('localhost', 'LB8363', '23Shwasted')){
	
}
else {
	die('<p>Could not connect to MySQL because: <b>' .mysql_error() .
	'</b></p>');
}
if (@mysql_select_db("LB8363_PROJECT1", $connection)){
}
else {
	die('<p>Could not select the LB8363_PROJECT1 database because: <b>' .mysql_error().'</b></p>');
}

?>

<div id="container">

	<div id = "hd" style="width:100%;">
		<div id = "header">
		<table width = "100%">
			<td>
			<a href = "http://acadweb1.salisbury.edu/~LB8363/amhome.html" alt = "home"><img style = "margin-left: 100px;border-style: none; margin-left: 510px; position: relative;"alt = "Logo" id = "Logo" src = "two.png" width = "70px" height = "100px" /></a>
			</td>
			<td width = "60%">
			
			<ul style ="position: absolute; margin-top: -45px;">
				<li><a href= "Marina.php" class = "menu">Marina</a></li>
				<li><a href = "Owners.php"class = "menu">Owners</a></li>
				<li><a href = "Marina_Slip.php" class = "menu">Marina Slip</a></li>
				<li><a href = "Service_Request.php" class = "menu">Service Request</a></li>
				<li><strong><a href = "Service_Category.php" class = "menu">Service Category</a></strong></li>
			</ul>
			</td>
			</table>
		</div>
	</div>	
<br />

<div class="tabs">
    <ul class="tab-links">
        <li class="active"><a href="#tab1">Insert Service Category</a></li>
        <li><a href="#tab2">Delete Service Category</a></li>
        <li><a href="#tab3">Edit Service Category</a></li>	
		<li><a href="#tab4">Find Service Category</a></li>
		<li><a href="#tab5">List Service Category</a></li>
						
    </ul>
   
    <div class="tab-content">
	    <div id="tab1" class="tab active">
			<form action = "insertCategory.php"  method= "post" onsubmit = "return Submit(insertCategory.php)">

			<h2 class = "centerIT">Service Category Information</h2>
			<h4 class = "centerIT">Step 1: Enter Service Category Information:</h4>
			<br />
			<p class = "centerIT"> Category Number: <input name = "catNum" size = "52" type = "text"/><br /></p>
			<p class = "centerIT"> Category Description: <input name = "catDescription" size = "52" type = "text"/><br /></p>
			<p><input type = "submit" name = "insertCategory" value = "Insert Category"></input></p>
			</form>


		</div>
			<div id="tab2" class="tab">
			<form action = "deleteCategory.php"  method= "post">
			<h2 class = "centerIT">Delete Service Category</h2>
			<h4 class = "centerIT">Step 1: Enter Service Category Number:</h4>
			<br />
			<select name = "dropdown">
		<?php
		$myData = mysql_query("SELECT * FROM SERVICE_CATEGORY ORDER BY CATEGORY_NUM DESC");
		while( $record = mysql_fetch_array($myData))
		{
		echo '<option value ="' . $record['CATEGORY_NUM'] . '">' . $record['CATEGORY_NUM'] . '</option>';	

		}
			?>
			</select>
			<p><input type = "submit" name = "deleteCat" value = "Delete Service Category"></input></p>
			</form>
			
			</div>
			<div id="tab3" class="tab">
			<form action = "editCategory.php"  method= "post">
			<h2 class = "centerIT">Edit Service Category Information</h2>
			<h4 class = "centerIT">Step 1: Enter Service Category Number:</h4>
			<br />
			<select name = "dropdown">
		<?php
		$myData = mysql_query("SELECT * FROM SERVICE_CATEGORY ORDER BY CATEGORY_NUM DESC");
		while( $record = mysql_fetch_array($myData))
		{
		echo '<option value ="' . $record['CATEGORY_NUM'] . '">' . $record['CATEGORY_NUM'] . '</option>';	

		}
			?>
			</select>
			<p><input type = "submit" name = "editCat" value = "Edit Service Category"></input></p>
			</form>
			
			</div>
			<div id="tab4" class="tab">
			<form action = "findCategory.php"  method= "post">
			<h2 class = "centerIT">Find Service Category Information</h2>
			<h4 class = "centerIT">Step 1: Enter Service Category Number:</h4>
			<br />
			<select name = "dropdown">
		<?php
		$myData = mysql_query("SELECT * FROM SERVICE_CATEGORY ORDER BY CATEGORY_NUM DESC");
		while( $record = mysql_fetch_array($myData))
		{
		echo '<option value ="' . $record['CATEGORY_NUM'] . '">' . $record['CATEGORY_NUM'] . '</option>';	

		}
			?>
			</select>
			<p><input type = "submit" name = "findCat" value = "Find Service Category"></input></p>
			</form>
			</div>
			<div id="tab5" class="tab">
			<form action = "listCategory.php"  method= "post">
			<p><input type = "submit" name = "listCat" value = "List Service Category"></input></p>
			</form>
			</div>
	</div>
</div>

<div id="footer">
<p class = "centerIT" style = "margin-right:auto; margin-left: auto;"><center>
Copyright 2015 Leonardo Benitez
</center></p>
</div>
</div>
</body>

</html>