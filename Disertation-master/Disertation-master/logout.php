<?php

session_start();
session_unset();
session_destroy();

header("Location: home.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="./styles/styles-logout.css">
	<link rel="stylesheet" type="text/css" href="./styles/allstyles.css">
</head>

<body>
<!--This creates the top menu-->
<div class="container1" align="center">
			<li><a href="./home.php"class="cool-link">Home</a></li>
			<li><a href="./gallery.php"class="cool-link">Gallery</a></li>
			<li><a href="./contact.php"class="cool-link">Contact</a></li>
			<li><a href="./aboutus.php"class="cool-link">About us</a></li>
		
</div>

