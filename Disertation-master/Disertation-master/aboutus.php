<!DOCTYPE html>
<html>
<head>
<title>About us</title>


<link rel="stylesheet" type="text/css" href="./styles/styles-aboutus.css">
<link rel="stylesheet" type="text/css" href="./styles/allstyles.css">



<!-- JQuery imported-->
	<script type="text/javascript" src="jquery-changebg.js"></script>
	
<!-- The function to allow a user to change the background image-->
	<script type="text/javascript" src="changebg.js"></script>
	
<!-- JS to create the pop up window-->
<script type="text/javascript">
			<!--
			    function toggle_visibility(id) {
			       var e = document.getElementById(id);
			       if(e.style.display == 'block')
			          e.style.display = 'none';
			       else
			          e.style.display = 'block';
			    }
			//-->
</script>
<!--Import for the menu-->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
	
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


<?php
//Maintains background session
session_start();
if(isset($_SESSION['image']))
{
	echo '<script type="text/javascript">changeImage('.$_SESSION['image'].')</script>';
}
?>


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
		   <li><a href="./editor.php">Standard Editor</a><li>
		   <li><a href="./myaccount.php">Premium Editor</a><li>
		   <li><a href="./personalise.php">Customise the website</a><li>
		</ul>
		
		</div>


<!--This  creates the text box for Ioana-->
<div class="box1">Ioana David</div>
<img  src="./images/20.jpg" id="ioana" alt="ioana" href="javascript:void(0)" onclick="toggle_visibility('popupBoxOnePosition');"/>


<!--This creates the text box for Irina-->
<div class="box2">Irina Cristache</div>

<img  src="./images/21.jpg" id="irina" alt="irina" href="javascript:void(0)" onclick="toggle_visibility('popupBoxTwoPosition');"/>

<!--This creates the pop up window for Ioana-->

<div id="popupBoxOnePosition">

			<div class="popupBoxWrapper">
				<div class="popupBoxContent">
					<button id="close" onclick="toggle_visibility('popupBoxOnePosition');">X</button>
					<h3><center> Ioana David</center></h3>
					<p>I have BSc in International Relations and American Studies and I am currently doing a masters in Computer Science at University of Kent. 
					During my undergraduate and postgraduate degree, I have tried to combine studying with part-time working which has helped me develop  numerous skills such as time-management, project-management, customer experience, communication or working in a team.
					I decided to do a masters in Computer Science because  I believed it would be a great opportunity to develop the IT skills needed to develop  a career in either digital marketing or consulting.
					</p>
				</div>
			</div>
		</div>



<!--This creates the pop up window for Irina-->
<div id="popupBoxTwoPosition">
			<div class="popupBoxWrapper">
				<div class="popupBoxContent">
				    <button id="close" onclick="toggle_visibility('popupBoxTwoPosition');">X</button>
					<h3><center>Irina Cristache</center></h3>
					<p>Thank you for stopping by! My passion for photography started a few years ago.I spent a lot of time trying to find the perfect photo editor but I failed.
					So I learned how to code and made my own.
					<p>I am a Conversion MSc Student at the University of Kent and although it was challenging to study full time and work part time on the side, it was a rewarding experience because I learned how to manage my time efficiently and how to code, which is something that I have always wanted to learn. </p>
				</div>
			</div>
		</div>







</body>
</html>
