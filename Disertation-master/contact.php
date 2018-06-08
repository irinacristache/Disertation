<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="./styles/styles-contact.css">
</head>
<body>
<!--This creates the top menu-->
<div class="container1">
			<li><a href="./home.php"class="cool-link">Home</a></li>
			<li><a href="./gallery.php"class="cool-link">Gallery</a></li>
			<li><a href="./contact.php"class="cool-link">Contact</a></li>
			<li><a href="./aboutus.php"class="cool-link">About us</a></li>
		
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
		<input button type="submit" class="form-control submit" value="SEND MESSAGE">
</form>
</div>
	<!--This button allows access to the editing app-->
	<button class="button button1" onclick="document.location='editor.php'">Let's edit</button>
	<!--This button allows to log in into the website-->
	<button class="button button2"  onclick="document.location='login.php'" >Log in</button>
	<!--This button allows to register with the website-->
	<button class="button button3"  onclick="document.location='register.php'">Register</button>
	</body>
</html>