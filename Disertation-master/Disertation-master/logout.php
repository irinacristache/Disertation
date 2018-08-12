<?php

session_start();
session_unset();
session_destroy();

header("Location: index.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	
	<!--Import CSS files-->
	<link rel="stylesheet" type="text/css" href="./styles/styles-logout.css">
	<link rel="stylesheet" type="text/css" href="./styles/allstyles.css">
	
	<!--Import for the menu-->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
	
	<!-- JQuery imported-->
	<script type="text/javascript" src="jquery-changebg.js"></script>
	
	<!-- The function to allow a user to change the background image-->
	<script type="text/javascript" src="changebg.js"></script>
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
<!--This creates the top menu-->
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
		   <li><a href="./editor.php">Editor</a><li>
		   <li><a href="./personalise.php">Customise the website</a><li>
		</ul>
		
		</div>
