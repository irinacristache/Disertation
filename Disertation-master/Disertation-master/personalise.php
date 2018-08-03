
<head>
<!DOCTYPE html>
<html>
<head>

	<title>Home </title>
	<link rel="stylesheet" type="text/css" href="./styles/styles-personalise.css">
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
<!--Choose Background image-->
	<div id="chooseBg" >
	<center><p>Choose your background image!</p></center>
	<a href="#" onclick="changeImage(9);"><img src="./images/9.jpg" width="85" height="85"/></a>
	<a href="#"onclick="changeImage(5);"><img src="./images/5.jpg" width="85" height="85"></a>
	<a href="#"onclick="changeImage(15);"><img src="./images/15.jpg" width="85" height="85"><br></a>
	<center><a href="#" onclick="clearImage();">Clear Image</a></center>
	</div> 
</body>
</html>