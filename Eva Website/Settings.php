
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<link rel="StyleSheet" href="style.css" type="text/css" media="screen">
<SCRIPT LANGUAGE="JavaScript" src="tabs.js"></SCRIPT>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Settings</title>

<style type = "text/css">
.event-Stripe
{
width: 100%;
height: 100px;
position: relative;	
margin: -8px;
padding: 12px 8px;
}

table {
	border-spacing: 5px;
}

</style>
</head>
<!--<body style = "background-color: #333; opacity: .9;">-->
<body>
<?php
	session_start();
$UI = $_SESSION['UI'];
$_SESSION['UI'] = $UI;
?>
<section class = "event-Stripe"  style = "background-color: #5a5386; opacity: .9;">
<a style = "text-align: left; font-size: 30px;" href = "home.php">⇱</a><h1 class = "center-IT">Settings</h1>
</section>


<br/>

<div class = "tabs">
<ul class = "tab-links">
	<li> <a href = "#Security"> Security </a></li>
	<li> <a href = "#AddProfilePicture"> Add Profile Picture </a> </li>
	<li> <a href = "#PrivacyPolicy"> Privacy Policy</a> </li>
	<li> <a href = "#TermsAndConditions"> Terms & Conditions </a></li>
	
</ul>

<div class = "tab-content">

	<div id = "Security" class = "tab active">
	<br>
	
	<div class = "tabs">
	<ul class = "tab-links">
		<li class = "active"> <a href = "#ChangePassword"> Create New Password </a></li>
		<li> <a href = "#ChangePersonalInfo"> Change Personal Information </a></li>
	</ul>
	
<div class = "tab-content">
	
	<div id = "ChangePassword" class = "tab active">
	
	<form action = "submitPassword.php" method = "post">
	<table width = "50%">
	<td width = "30%">
	<h4>Enter New Password:</h4><br><br>
	<h4>Confim New Password:</h4><br><br>
	</td>
	<td width = "30%">
	<input class = "textbox" name = "newPassword" size = "30" type = "password" placeholder = "New Password" required oninvalid = "this.setCustomValidity"('Enter New Password Here') oninput = "setCustomValidity('')"><br><br>
	<input class = "textbox" name = "ConfirmnewPassword" size = "30" type = "password" placeholder = "Confirm New Password" required oninvalid = "this.setCustomValidity"('Confirm New Password Here') oninput = "setCustomValidity('')"><br><br>
	</td>
	<tr>
	<td class = "centerIT"><input type = "submit" name = "changes" value = "Submit Changes"></input></td>	
	</tr>
	</table>
	</form>
	</div>
	
	
	<div id = "ChangePersonalInfo" class = "tab">
	
	<form action = "submitPersonalInfo.php" method = "post">
	
	<table width = "50%">
	<td width = "30%">
	<h4>Enter New First Name:</h4><br><br>
	<h4>Enter New Last Name:</h4><br><br>
	<h4>Enter New School Email:</h4><br><br>
	</td>
	<td width = "30%">
	<input class = "textbox" name = "newFName" size = "30" type = "text" placeholder = "First Name" required oninvalid = "this.setCustomValidity"('Enter First Name Here') oninput = "setCustomValidity('')"><br><br>
	<input class = "textbox" name = "newLName" size = "30" type = "text" placeholder = "Last Name" required oninvalid = "this.setCustomValidity"('Enter Your Last Name Here') oninput = "setCustomValidity('')"><br><br>
	<input class = "textbox" name = "newEmail" size = "30" type = "text" placeholder = "School Email" required oninvalid = "this.setCustomValidity"('Enter Your School Email Here') oninput = "setCustomValidity('')"><br><br>
	</td>
	<tr>
	<td class = "centerIT"><input type = "submit" name = "changes" value = "Submit Changes"></input></td>	
	</tr>
	</table>
	</form>
	</div>
	
	</div>
	
	</div>
	</div>

	<div id = "AddProfilePicture" class = "tab">
	
	<form action="checkImage.php" method="POST" enctype="multipart/form-data">
	
	<table width = "50%">
	<td width = "30%">
	<h4>Browse a File:</h4><br><br><br>
	
	</td>
	
	<td width = "30%">
	
	<input type="file" name="image"> </p><br>
	<p align = "center"><input name = "Upload Now" type="submit" value = "Upload Image"></p>
	</td>
	</table>
	</form>
	
	</div>
	
	<div id = "PrivacyPolicy" class = "tab">
	
	<p align = "center"><h4><b> Eva Privacy Policy </b></h4><p>
	<br>
	<br>
	
	<p> <h4> Introduction </h4></p>
	<br>
	
	<p> <h4>
	Thank You for choosing EVA. This is our Privacy Policy.<br>
	Before getting into the the details, we would like to <br>
	highlights some of the key principles. These principles are <br>
	very important to us because we know they are very valuable to you.
	<br>
	<br>
	The Privacy Policy is here to explain three things: <br>
	
	1. The way we use the information that you share  <br>
		with us inorder to build a great product and give you <br>
		a great experience with it; <br>
		<br>
	2. Ensure that you understand what information we collect <br>
		with your permission, and what we do - and do not do - with it; <Br>
		<br>
	3. Hold us accountable for protecting your rights and your privacy<br>
		under this policy.
	<br>
	<br>
	
	All the information we collect is related to provide the EVA services and its features
	
	<br>
	<br>
	
	Commonly speaking, there are two type of information we collect: <br>
	1) information that we must have in order for you to use EVA; and <br>
	2) information that we can use to provide additional features <br>
	<br>
	
	The first type of information includes:<br>
	<br>
	* Registration information, including your first name, <br>
	  last name, email address and other information you provide <br>
	  when you sign up for EVA.<br>
	<br>
	
	* Broad, non-specific location, which we drive from your IP address.<br>
	  Inorder to find the store that is closer to the location of an event, <br>
	  we need to know the country and location your in.<br>
	<br>
	
	* Technical and sensor information necessary to operate EVA. 
	  This includes the type of browser and device, data from the <br>
	  touchscreen, and information fom your device's accelerometer <br>
	  and gyroscope sensors. This enalbes you to control EVA and allows <br>
	  to do simple things like to display the past events and upcoming events. <br>
	  <br>
	  <br>
	  
	 The Second type of information that allows us to offer you additional features<br>
	 <br>
	 
	 * Your specific location: We will never gather or use your specific device <br>
	   location without first getting your explicit permission. This information allows <br>
	   us to recomment you more local store and such.
	   <br>
	   <br>
	   
	 * Your photos: We will only access images that you specifically choose, and we will <br>
	   neve scan or import your photo library or camera roll. This allows you to choose <br>
	   individual pictures to change your profile picture. 
	   <br>
	   <br>
	   
	 * Your contacts: We will never scam or import your contacts unless you ask us to.<br>
	   If you choose to do so, we will only use contact information to help you find store <br>
	   and business onwer near your location.
	   <br>
	   <br>
	  
	</h4>
	</p>
	
	</div>
	
	<div id = "TermsAndConditions" class = "tab">
	
	<p>
	<h4>
	Hello, Welcome to our Terms and Conditions of Use.<br>
	This is important and affects your rights, so please <br>
	read them and our Privacy Policy and other terms referenced in <br>
	this documents carefully.
	<br>
	</h4>
	</p>
	
	<br>
	<br>
	
	<p>
	<h4><b>
	Introduction 
	<b>
	</h4>
	</p>
	
	<br>
	
	<p>
	<h4>
	Thank You for choosing EVA. By signing up or otherwise using EVA,<br>
	website or acessing any content or material that is made available by <br>
	EVA through the Service, you are entering into a binding contract with the EVA.<br>
	</h4>
	</p>
	<br>
	
	<p>
	<h4>
	The EVA Services includes social and interative features. <br>
	Use of the EVA Service relies on several technical requirements. <br>
	</h4>
	</p>
	<br>
	
	<p>
	<h4>
	Your agreement with us incldes these Terms and Conditions of Use("Terms") <br>
	and our Privacy Policy. If you wish to review the terms of the Agreement, <br>
	the effective version of the Agreements can be found in EVA's website under <br>
	Terms and Conditions. You acknowledge that you have read and understood the <br>
	Agreements, accept these Agreements, and agree to be bound by them. If you don't <br>
	agree with the Agreements, then you may not use the EVA Service or consume any content.
	<br>
	</h4>
	</p>
	<br>
	<br>
	
	<p>
	<h4><b>
	Please read the Agreement carefully: </b><br>
	</h4>
	</p>
	<br>
	
	<p>
	<h4>
	Any information that you provide during sign-up can be <br>
	corrected during the sign-up process by returning to the <br>
	previous screens and correcting erroneous information. <br>
	</h4>
	</p>
	<br>
	
	<p>
	<h4>
	In order to use EVA Service and access the Content, you need to <br>
	(1) be 18 or older, or be 13 or older and have your parent or <br>
	guardian's consent to the Agreements, (2) must be in school,college <br>
	or any type of community organization, (3) have the power to enter a binding <br>
	contract with us and not be barred from doing so under any applicable laws, and <br>
	(4) be resident in a couuntry where the Service is available. You also promise that any <br>
	registration information that you submit to EVA is true, accurate, and complete, and you<br>
	agree to keep it that wat at all times. <br>
	</h4>
	</p>
	<br>
	
	<p>
	<h4>
	Occasionally we may, in our discretion, make changes to the Agreements. When we make <br>
	material chnages to the Agreements, we'll provide you with prominent notice as appropriate <br>
	under the circumstances, e.g., by displaying a prominent notice within the Service or by sending <br>
	you an email. In some cases, we will notify you in advance, and your continued use of the service <br>
	after the changes have been made will constitute your acceptance of the changes. Please therefore <br>
	make sure you read any such notice carefully. If you do not wish to continue using the Service under <br>
	the new version of the Agreements, you may termiate the Agreements by contacting us through the <br>
	Customer Service Contact form.<br>
	</h4>
	</p>
	
	<br>
	
	
	</div>
	
	
	
</div>

</div>
</body>
</html>

</html>