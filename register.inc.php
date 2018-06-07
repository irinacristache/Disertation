<?php
session_start();
// check if the button is clicked
	if(isset($_POST['submit'])){
// connect to db
	include_once 'connect.php';
//prevents injections

	$first = mysqli_real_escape_string($conn,$_POST['first']);
	$last = mysqli_real_escape_string($conn,$_POST['last']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$uid = mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
	
	//Error handlers
	
	//check everything is filled in
	
	if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
		
		header("Location: register.php?register=empty");// if the button is not clicked the user is sent back to the registration form
		exit();
	}else{
		//Check if input characters are valid
		if(!preg_match("/^[a-zA-Z]*$/",$first)||!preg_match("/^[a-zA-Z]*$/",$last)){
			header("Location: register.php?register=invalid");//  the user is sent back to the registration form
		exit();
		}else{
			//check if email is valid
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		header("Location: register.php?register=email");// the user is sent back to the registration form
		exit();}
		else{
		$sql = "SELECT * FROM users WHERE user_id='$uid'";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck > 0){
			header("Location: register.php?register=usertaken");//  the user is sent back to the registration form
		exit();}
		else
		{ 
	//Check the password-hashing the password 	
		$hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);
		//Insert the user into the database
		$sql = "INSERT INTO users (user_first, user_last,user_email, user_uid,user_pwd) VALUES ('$first', '$last', '$email','$uid', '$hashedPwd');";
		$result = mysqli_query($conn, $sql);
		header("Location: register.php?register=success");
		exit();
		}

	}
	}
}

}  else{
		header("Location: register.php");// if the button is not click the user is sent back to the registration form
		exit();
}