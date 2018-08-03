<?php


/*if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];
	
	$mailTo= "id89@kent.ac.uk";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an e-mail from ".$name.".\n\n".$message;
	
	
	mail($mailTo, $txt, $headers);
	header("Location: home.html?mailsent");
	
}*/
	$name=$_POST['name'];
	$visitor_email=$_POST['email'];
	$message=$_POST['message'];
	
	$email_from='id89@kent.ac.uk';
	
	$email_subject="New Form Submission";
	
	$email_body="User Name: $name.\n".
				"User Email: $visitor_email.\n".
				"User Message: $message.\n";
				
	$to="id89@kent.ac.uk";
	
	$headers="From: $email_from \r\n";

	$headers .="Reply-To $visitor_email \r\n";
	
	mail($to, $email_subject,$email_body,$headers);
	header("Location: contact.html"); 


?>