
<!DOCTYPE html>
<html>
<head>

	<title>Home </title>
	<link rel="stylesheet" type="text/css" href="./styles/styles-home.css">
	<link rel="stylesheet" type="text/css" href="./styles/allstyles.css">
	
	<!-- JQuery imported-->
	<script type="text/javascript" src="jquery-changebg.js"></script>
	
	<!-- The function to allow a user to change the background image-->
	<script type="text/javascript" src="changebg.js"></script>
	
</head>
<body>

<?php

session_start();
if(isset($_SESSION['image']))
{
	echo '<script type="text/javascript">changeImage('.$_SESSION['image'].')</script>';
}
?>


		<!--This creates the top menu<-->
		<div class="container1">
			<li><a href="./home.php"class="cool-link">Home</a></li>
			<li><a href="./gallery.php"class="cool-link">Gallery</a></li>
			<li><a href="./contact.php"class="cool-link">Contact</a></li>
			<li><a href="./editor.php">Standard Editor</a><li>
		   <li><a href="./myaccount.php">Premium Editor</a><li>
			<li><a href="./aboutus.php"class="cool-link">About us</a></li>
		</div>
		
	<!--The button which allows to access the editing app-->
	<button class="button button5" onclick="document.location='editor.php'">Let's edit</button>
	<!--The button that allows to log in into the website-->
	<button class="button button2"  onclick="document.location='login.php'" >Log in</button>
	<!--The button which allows to register with the website-->
	<button class="button button3"  onclick="document.location='register.php'">Register</button>
	
	<!--Choose Background image-->
	<div id="chooseBg" >
	<center><p>Choose your background image!</p></center>
	<a href="#" onclick="changeImage(9);"><img src="./images/9.jpg" width="85" height="85"/></a>
	<a href="#"onclick="changeImage(5);"><img src="./images/5.jpg" width="85" height="85"></a>
	<a href="#"onclick="changeImage(15);"><img src="./images/15.jpg" width="85" height="85"><br></a>
	<center><a href="#" onclick="clearImage();">Clear Image</a></center>
	</div>


</body>
</html>