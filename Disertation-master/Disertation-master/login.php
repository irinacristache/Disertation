
<!--Imports JS for alert box-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<?php
//the log in system 

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
			
			$stm = $conn->prepare("Select Password From Users where Username = :user");
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
	   <?php
	   //Maintains background session
session_start();
if(isset($_SESSION['image']))
{
	echo '<script type="text/javascript">changeImage('.$_SESSION['image'].')</script>';
}
?>
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

<!--This creates the login form-->
<div class="registration-title">
    <h1>Log in</h1>
</div>

<!--Log-in form-->
<div class="registration-form">

    <form id="registration-form" class="form" action="login.php" method="post" autocomplete="off">
	  <input type="text" class="form-control" placeholder="Username" name="username" required />
      <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password"class="form-control" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <button type="submit" class="form-control submit" value="Log in" name="LogInBtn">Log In</button>
    </form>
</div>
</div>


<!--The button that allows the user to access the editing app-->
<button class="button button1" onclick="document.location='register.php'">Register</button>

	
</body>
</html>