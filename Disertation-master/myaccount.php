
<? php
	session_start();
	print_r($_SESSION);
	if(!isset($_SESSION['loggedIn']) || (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === 0) )
	{
		$_SESSION['loggedIn'] = 0;
		header("Location: login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="./styles/styles-myaccount.css">
</head>

<body>
<!--This creates the top menu-->
<div class="container1" align="center">
			<li><a href="./home.php"class="cool-link">Home</a></li>
			<li><a href="./gallery.php"class="cool-link">Gallery</a></li>
			<li><a href="./contact.php"class="cool-link">Contact</a></li>
			<li><a href="./aboutus.php"class="cool-link">About us</a></li>
		
</div>

<button class="button button4"  onclick="document.location='logout.php'">Log out</button>

</body>
</html>