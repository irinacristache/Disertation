
<?php
//the registration system
session_start();

$FirstName = $LastName = $Username = $Email = "";
$msgError = "";
$msgSucces = "";

if(isset($_POST["Register"])){

include 'connect.php';

$conn=connect();
	
$isOK = true;

$FirstName= $_POST["FirstName"];
$LastName= $_POST["LastName"];
$Password= $_POST["Password"];

$Username= $_POST["Username"];
$Email=$_POST["Email"];

//Check if fields are completed
if (empty($FirstName) || empty($LastName) || empty($Password) || empty($Email)) {
	
	header ("Location: ../register.php?signup=empty");
}

//Validation
//If users exists

$handle = $conn->prepare("Select count(*) from Users Where Username = :usr;");
$handle->bindParam(":usr", $Username);
$handle->execute();
$numRows = $handle->fetchColumn();
//print_r($numRows);

if($numRows > 0)
{
	$isOK = false;
	$msgError = "The user already exists";
}

if(!preg_match("/^[a-zA-Z0-9_.+-]*@[a-zA-Z0-9]{1}[a-zA-Z0-9-]+[a-zA-Z0-9]{1}\.[a-zA-Z0-9-]+$/", $Email))
{
	$isOK = false;
	$msgError = "The email address is not valid"; 
}

if(strlen($Password) < 8)
{
	$isOK = false;
	$msgError = "The password must have at least 8 characters";
}

if(!preg_match("/([a-z]+[A-Z]+)|([A-Z]+[a-z]+)/" , $Password))
{
	$isOK = false;
	$msgError = "The password needs to be a combination of lowercase and uppercase letters";
}

if(!preg_match("/[0-9]+/", $Password))
{
	$isOK = false;
	$msgError = "The password needs to contain at least a number";
}

$Password= password_hash($_POST["Password"], PASSWORD_DEFAULT);

if($isOK === true)
{
	$sql = "INSERT INTO Users (`FirstName`, `LastName`, Username, Mail, Password) VALUES (:firstName, :lastName, :uname, :email, :pass);";
	$handle = $conn->prepare($sql);
	$handle->bindParam(":firstName", $FirstName);
	$handle->bindParam(":lastName", $LastName);
	$handle->bindParam(":uname", $Username);
	$handle->bindParam(":pass", $Password);
	$handle->bindParam(":email", $Email);
	$handle->execute();
	$conn = null;
	
	$msgSucces = "The account has been created";
}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	
	
	
	<!--Imports CSS files-->
	<link rel="stylesheet" type="text/css" href="./styles/styles-register.css">
	<link rel="stylesheet" type="text/css" href="./styles/allstyles.css">
	
	<!--Import for the menu-->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
	
	<!-- JQuery imported-->
	<script type="text/javascript" src="jquery-changebg.js"></script>
	
	<!-- The function to allow a user to change the background image-->
	<script type="text/javascript" src="changebg.js"></script>
	
	<?php //Maintains background session
session_start();
if(isset($_SESSION['image']))
{
	echo '<script type="text/javascript">changeImage('.$_SESSION['image'].')</script>';
}
	
?>
	
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
		   <li><a href="./editor.php">Editor</a><li>
		   <li><a href="./personalise.php">Customise the website</a><li>
		</ul>
		
		</div>
		
		
		
<!--This creates the registration form-->
<div class="registration-title">
    <h1>Create an account</h1>
</div>

<!--Creates the registration form -->
<div class="registration-form">
    <form id="registration-form" class="form" action="register.php" onclick="login.php" method="post" >
	  <input type="text"class="form-control" name="FirstName" placeholder="Firstname" value="<?php print $FirstName; ?>" required/>
	  <input type="text" class="form-control" name="LastName" placeholder="Lastname" value="<?php print $LastName; ?>" required/>
	  <input type="text" class="form-control" placeholder="Username"  name="Username" value="<?php print $Username; ?>" required />
      <input type="email" class="form-control" placeholder="Email"  name="Email" value="<?php print $Email; ?>" required />
      <input type="password" class="form-control" placeholder="Password" name="Password" autocomplete="new-password" required />
	  
	  <!--If anything goes wrong-->
	  <div class="ErrMsg">
		<?php print $msgError; ?>
	  </div>
	  <div class="SuccMsg">
		<?php print $msgSucces?>
	  </div>
      <input type="submit" class="form-control submit" value="Register" name="Register" />
    </form>
	
	<?php
	$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	
	if(strpos($fullUrl, "signup=empty") == true) {
		echo "You did not fill in all fields!";
	}
	
	elseif(strpos($fullUrl, "signup=email") == true) {
		echo "You did not fill in all fields!";
	}
	?>
</div>

<!--The button that allows the user to access the login page-->
<button class="button button1" onclick="document.location='login.php'">Login</button>

	
</body>
</html>
