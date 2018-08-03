<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
	<link rel="stylesheet" type="text/css" href="./styles/styles-gallery.css">
	<link rel="stylesheet" type="text/css" href="./styles/allstyles.css">
	
	<!-- JQuery imported-->
	<script type="text/javascript" src="jquery-changebg.js"></script>
	
	<!-- The function to allow a user to change the background image-->
	<script type="text/javascript" src="changebg.js"></script>
</head>

<body>
<!--Mantains the session for the background image-->
<?php

session_start();
if(isset($_SESSION['image']))
{
	echo '<script type="text/javascript">changeImage('.$_SESSION['image'].')</script>';
}
?>

<!--This creates the top menu-->
<div class="container1">
			<li><a href="./index.php"class="cool-link">Home</a></li>
			<li><a href="./gallery.php"class="cool-link">Gallery</a></li>
			<li><a href="./contact.php"class="cool-link">Contact</a></li>
			<li><a href="./aboutus.php"class="cool-link">About us</a></li>
		
</div>
<!--This creates the slideshow-->
<div class="container2">
	
	<input type="radio" id="i1" name="images" checked />
	<input type="radio" id="i2" name="images" />
	<input type="radio" id="i3" name="images" />
	<input type="radio" id="i4" name="images" />
	<input type="radio" id="i5" name="images" />	
	
	<div class="slide_img" id="one">			
			
			<img src="./images/1.jpg">
			
				<label class="prev" for="i5"><span>&#x2039;</span></label>
				<label class="next" for="i2"><span>&#x203a;</span></label>	
		
	</div>
	
	<div class="slide_img" id="two">
		
			<img src="./images/2.jpg" >
			
				<label class="prev" for="i1"><span>&#x2039;</span></label>
				<label class="next" for="i3"><span>&#x203a;</span></label>
		
	</div>
			
	<div class="slide_img" id="three">
			<img src="./images/17.jpg">	
			
				<label class="prev" for="i2"><span>&#x2039;</span></label>
				<label class="next" for="i4"><span>&#x203a;</span></label>
	</div>
	
		<div class="slide_img" id="four">
			<img src="./images/8.jpg">	
			
				<label class="prev" for="i3"><span>&#x2039;</span></label>
				<label class="next" for="i5"><span>&#x203a;</span></label>
	</div>
		
	<div class="slide_img" id="five">
			<img src="./images/18.jpg">	
			
				<label class="prev" for="i4"><span>&#x2039;</span></label>
				<label class="next" for="i1"><span>&#x203a;</span></label>
	</div>


<!--The navigation menu for the slideshow-->
	<div id="nav_slide">
		<label for="i1" class="dots" id="dot1"></label>
		<label for="i2" class="dots" id="dot2"></label>
		<label for="i3" class="dots" id="dot3"></label>
		<label for="i4" class="dots" id="dot4"></label>
		<label for="i5" class="dots" id="dot5"></label>
	</div>	
</div>
	<!-- This button allows access to the editing app -->
	<button class="button button1" onclick="document.location='editor.php'">Let's edit</button>
	<!--This button allows to log in on the website -->
	<button class="button button2"  onclick="document.location='login.php'" >Log in</button>
	<!--This button allows to register with the website-->
	<button class="button button3"  onclick="document.location='register.php'">Register</button>
</body>
</html>
