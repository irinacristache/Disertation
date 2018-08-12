
<head>
<!DOCTYPE html>
<html>
<head>

	<title>Customise the website </title>
	<!--Imports the CSS files-->
	<link rel="stylesheet" type="text/css" href="./styles/styles-personalise.css">
	<link rel="stylesheet" type="text/css" href="./styles/allstyles.css">
	
	<!--Import for the menu-->
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
	<a href="#" onclick="changeImage(3);"><img src="./images/3.jpg" width="120" height="120"/></a>
	<a href="#"onclick="changeImage(5);"><img src="./images/5.jpg" width="120" height="120"></a>
	<a href="#"onclick="changeImage(1);"><img src="./images/1.jpg" width="120" height="120"></a>
	<a href="#"onclick="changeImage(15);"><img src="./images/15.jpg" width="120" height="120"><br></a>
	<a href="#"onclick="changeImage(7);"><img src="./images/7.jpg" width="120" height="120"></a>
	<a href="#"onclick="changeImage(16);"><img src="./images/16.jpg" width="120" height="120"></a>
	<a href="#"onclick="changeImage(2);"><img src="./images/2.jpg" width="120" height="120"></a>
	<a href="#"onclick="changeImage(13);"><img src="./images/13.jpg" width="120" height="120"><br></a>
	<center><a href="#" onclick="clearImage();">Clear Image</a></center>
	</div> 
</body>
</html>