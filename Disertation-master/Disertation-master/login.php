<?php
include 'connect.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
	if(isset($_POST['LogInBtn']) && $_POST['LogInBtn'] === 'Log in') {
		$isAllGood = 1;
		
		if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['confirmpassword']))
			$isAllGood = 0;
			
		if($_POST['password'] !== $_POST['confirmpassword']){
			echo("Password do not match");
			$isAllGood = 0;
		}
			
		$user = $_POST['username'];
		$pass = $_POST['password'];
		
		if($isAllGood === 1) {
			$conn = connect();
			
			$stm = $conn->prepare("Select Password From users where Username = :user");
			$stm->bindParam(':user', $user);
			$stm->execute();
			
			if($stm->rowCount() === 0)
				echo("User does not exist");
			else{
				$row = $stm->fetch(PDO::FETCH_ASSOC);
				
				if(password_verify($pass, $row['Password'])){
				//if($row['Password'] === $pass){
					session_start();
					$_SESSION['loggedIn'] = 1;
					$_SESSION['username'] = $user;
					
					echo("Succes");
					
					header("Location: myaccount.php");
				} else {
					echo("Password is wrong");
				}
			}
		}
	}
}

session_start();
if (!isset($_SESSION['loggedIn']))
	$_SESSION['loggedIn'] = 0;
else if ($_SESSION['loggedIn'] == 1)
	header('Location: myaccount.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="./styles/styles-login.css">
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

<!--This creates the login form-->
<div class="registration-title">
    <h1>Log in</h1>
</div>
    <form id="registration-form" class="form" action="login.php" method="post" autocomplete="off">
	  <input type="text" class="form-control" placeholder="Username" name="username" required />
      <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password"class="form-control" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <button type="submit" class="form-control submit" value="Log in" name="LogInBtn">Log In</button>
    </form>
</div>
<!--The button that allows the user to access the editing app-->
<button class="button button1" onclick="document.location='editor.php'">Let's edit</button>
<!--The button which allows the user to register with the website-->
<button class="button button3"  onclick="document.location='register.php'">Register</button>
	
</body>
</html>