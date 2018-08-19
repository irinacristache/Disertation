<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	
	<!--Import CSS files-->
	<link rel="stylesheet" type="text/css" href="./styles/styles-contact.css">
	<link rel="stylesheet" type="text/css" href="./styles/allstyles.css">
	
<!-- JQuery imported-->
	<script type="text/javascript" src="jquery-changebg.js"></script>
	
<!-- The function to allow a user to change the background image-->
	<script type="text/javascript" src="changebg.js"></script>
	
<!--Confirmation box for succesfull message-->
<script>
function confirmation() {
    alert("Thank you for your message!");
}
</script>

<!--Import for the menu-->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
	
	<!--JQuery for the menu-->
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	 <script type="text/javascript">
	  $(document).ready(function(){
		  $(".menu-icon").click(function(){
			$(".menu-icon").toggleClass("active")
		  })
		  
		  $(".menu-icon").click(function(){
			$(".sidebar").toggleClass("active")
		  })
	   })
	   </script>

</head>
<body>


<?php
//Maintains background session
session_start();
if(isset($_SESSION['image']))
{
	echo '<script type="text/javascript">changeImage('.$_SESSION['image'].')</script>';
}
?>

	<!--This creates the top menu<-->
		<div class="menu-icon">
		
		<span></span>
		<span></span>
		<span></span>
		</div>
		<div class="sidebar">
		<ul class="menu">
		   <li><a href="./index.php">Home</a><li>
		   <li><a href="./aboutus.php">About us</a><li>
		   <li><a href="./gallery.php">Gallery</a><li>
		   <li><a href="./contact.php">Contact</a><li>
		   <li><a href="./register.php">Register</a><li>
		   <li><a href="./login.php">Log in</a><li>
		   <li><a href="./editor.php">Standard Editor</a><li>
		   <li><a href="./myaccount.php">Premium Editor</a><li>
		   <li><a href="./personalise.php">Customise the website</a><li>
		</ul>
		
		
		</div>
<!--This creates the contact form -->
<div class="contact-title">
		<h1>Feel free to contact us!</h1>
</div>
<div class="contact-form">
	<form id="contact-form" method="post" action="contact-form-handler.php">
		<input name="name" type="text" class="form-control" placeholder="Your Name" required><br>
		<input name="email" type="email" class="form-control" placeholder="Your Email" required><br>
		<textarea name="message" class="form-control" placeholder="Message"rows="4" required></textarea><br>
		<input button type="submit" class="form-control submit" value="SEND MESSAGE" onclick="confirmation()">
</form>
</div>
<!--The button that allows the user to access the editing app-->
<button class="button button1" onclick="document.location='register.php'">Register</button>

</body>
</html>