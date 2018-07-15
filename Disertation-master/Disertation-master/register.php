
<?php
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

//Validare
//Daca exista user

$handle = $conn->prepare("Select count(*) from Users Where Username = :usr;");
$handle->bindParam(":usr", $Username);
$handle->execute();
$numRows = $handle->fetchColumn();
//print_r($numRows);

if($numRows > 0)
{
	$isOK = false;
	$msgError = "User-ul deja exista";
}

if(!preg_match("/^[a-zA-Z0-9_.+-]*@[a-zA-Z0-9]{1}[a-zA-Z0-9-]+[a-zA-Z0-9]{1}\.[a-zA-Z0-9-]+$/", $Email))
{
	$isOK = false;
	$msgError = "Adresa de email nu are un format corespunzator"; 
}

if(strlen($Password) < 8)
{
	$isOK = false;
	$msgError = "Lungimea parolei trebuie sa aiba minim 8 caractere";
}

if(!preg_match("/([a-z]+[A-Z]+)|([A-Z]+[a-z]+)/" , $Password))
{
	$isOK = false;
	$msgError = "Parola trebuie sa existe o combinatie de litere mari si mici";
}

if(!preg_match("/[0-9]+/", $Password))
{
	$isOK = false;
	$msgError = "Parola trebuie sa contina cel putin o cifra";
}

$Password= password_hash($_POST["Password"], PASSWORD_DEFAULT);

if($isOK === true)
{
	$sql = "INSERT INTO users (`First Name`, `Last Name`, Username, Mail, Password) VALUES (:firstName, :lastName, :uname, :email, :pass);";
	$handle = $conn->prepare($sql);
	$handle->bindParam(":firstName", $FirstName);
	$handle->bindParam(":lastName", $LastName);
	$handle->bindParam(":uname", $Username);
	$handle->bindParam(":pass", $Password);
	$handle->bindParam(":email", $Email);
	$handle->execute();
	$conn = null;
	
	$msgSucces = "User-ul a fost introdus cu succes";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="./styles/styles-register.css">
	<link rel="stylesheet" type="text/css" href="./styles/allstyles.css">
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
    <form id="registration-form" class="form" action="register.php" method="post" >
	  <input type="text"class="form-control" name="FirstName" placeholder="Firstname" value="<?php print $FirstName; ?>" required/>
	  <input type="text" class="form-control" name="LastName" placeholder="Lastname" value="<?php print $LastName; ?>" required/>
	  <input type="text" class="form-control" placeholder="Username"  name="Username" value="<?php print $Username; ?>" required />
      <input type="email" class="form-control" placeholder="Email"  name="Email" value="<?php print $Email; ?>" required />
      <input type="password" class="form-control" placeholder="Password" name="Password" autocomplete="new-password" required />
      <!--<input type="password"class="form-control" placeholder="Confirm Password" name="password_2" autocomplete="new-password" required />-->
      <!--<div class="avatar"><label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div>-->
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

<!--The button that allows the user to access the editing app-->
<button class="button button1" onclick="document.location='editor.php'">Let's edit</button>
<!--The button that allows the user to log in-->
<button class="button button2"  onclick="document.location='login.php'" >Log in</button>
	
</body>
</html>
