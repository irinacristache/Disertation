<?php include('connect.php')
session_start();
?>
<DOCTYPE! html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="./styles/styles-login.css">
</head>

<body>
<!--This creates the top menu-->
<div class="container1" align="center">
			<li><a href="./home.php"class="cool-link">Home</a></li>
			<li><a href="./gallery.php"class="cool-link">Gallery</a></li>
			<li><a href="./contact.php"class="cool-link">Contact</a></li>
			<li><a href="./aboutus.php"class="cool-link">About us</a></li>
		
</div>

<!--This creates the login form-->
<div class="registration-title">
    <h1>Log in</h1>
</div>
    <form id="registration-form" class="form" action="login.inc.php" method="post" autocomplete="off">
	  <input type="text" class="form-control" placeholder="Username" name="username" required />
      <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password"class="form-control" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <input type="submit" class="form-control submit" value="Sign in" name="register" />
    </form>
</div>
<!--The button that allows the user to access the editing app-->
<button class="button button1" onclick="document.location='editor.php'">Let's edit</button>
<!--The button which allows the user to register with the website-->
<button class="button button3"  onclick="document.location='register.php'">Register</button>
	
</body>
</html>