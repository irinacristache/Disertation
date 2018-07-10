/** PHP document to allow the  user to change the background image*/

<?php

if(isset($_POST['number']))
{
	session_start();
	$_SESSION['image']=$_POST['number'];
	
}

if(isset($_GET['resetBg']))
{
    session_start();
	session_destroy();
	
}
?>

