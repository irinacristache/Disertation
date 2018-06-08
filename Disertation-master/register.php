
<?php
session_start();

if(isset($_POST["Register"])){

include 'connect.php';

$conn=connect();
	

$FirstName= $_POST["FirstName"];
$LastName= $_POST["LastName"];
$Password= $_POST["Password"];
$Username= $_POST["Username"];
$Email=$_POST["Email"];

$sql = "INSERT INTO users (FirstName, LastName, Username, Password,Email)VALUES ('$FirstName','$LastName','$Username','$Password','$Email');";
$handle = $conn->prepare($sql);
$handle->execute();
$conn = null;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="./styles/styles-register.css">
</head>

<body>
<!--This create the top men-->
<div class="container1" align="center">
			<li><a href="./home.php"class="cool-link">Home</a></li>
			<li><a href="./gallery.php"class="cool-link">Gallery</a></li>
			<li><a href="./contact.php"class="cool-link">Contact</a></li>
			<li><a href="./aboutus.php"class="cool-link">About us</a></li>
		
</div>

<!--This creates the registration form-->
<div class="registration-title">
    <h1>Create an account</h1>
</div>
    <form id="registration-form" class="form" action="login.php" method="post" >
	  <input type="text"class="form-control" name="FirstName" placeholder="Firstname"  required/>
	  <input type="text" class="form-control" name="LastName" placeholder="Lastname" required/>
	  <input type="text" class="form-control" placeholder="Username"  name="Username"  required />
      <input type="email" class="form-control" placeholder="Email"  name="Email" required />
      <input type="password" class="form-control" placeholder="Password" name="Password" autocomplete="new-password" required />
      <!--<input type="password"class="form-control" placeholder="Confirm Password" name="password_2" autocomplete="new-password" required />-->
      <!--<div class="avatar"><label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div>-->
      <input type="submit" class="form-control submit" value="Register" name="register" />
    </form>
</div>

<!--The button that allows the user to access the editing app-->
<button class="button button1" onclick="document.location='editor.php'">Let's edit</button>
<!--The button that allows the user to log in-->
<button class="button button2"  onclick="document.location='login.php'" >Log in</button>
	
</body>
</html>
