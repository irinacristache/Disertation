<?php

session_start();

if(isset($_POST['submit'])){
	include 'connect.php';
	
	$uid = mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
	
	//Error handlers
	//Check if inputs are empty
	
	if(emtpy($uid) || empty($pwd)){
		header("Location: home.html?login=empty");
		exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_uid='$uid'";
		$result=mysqli_query($conn,$sql);
		$resultCheck =mysqli_num_rows($result);
		
		if($resultCheck < 1){
		header("Location: home.html?login=error");
		exit();
		} else{
			if($row=mysqli_fetch__asspc($result)){
				//echo $row['user_uid'];
				//Dehashing the password
				$hashedPwdCheck = password_verify($pwd,$row['user_uid']);
				if($hashedPwdCheck == false){
					header("Location: home.html?login=error");
		exit();
				} elseif($hashedPwdCheck == true){
					//Log in the user
					
				$_SESSION['u_id'] =$row['user_id'];
				$_SESSION['u_first'] =$row['user_first'];
				$_SESSION['u_last'] =$row['user_last'];
				$_SESSION['u_email'] =$row['user_last'];
				$_SESSION['u_uid'] =$row['user_uid'];
				header("Location: home.html?login=success");
		exit();
				}
			}
		}
		
	}
}    else{
		header("Location: home.html?login=error");
		exit();
	}