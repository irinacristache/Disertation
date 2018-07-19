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

</head>
<body>

<!--Mantains the session for the background image-->
<?php

session_start();
if(isset($_SESSION['image']))
{
	echo '<script type="text/javascript">changeImage('.$_SESSION['image'].')</script>';
}
?>




<!--This creates the top menu-->
<div class="container1">
			<li><a href="./home.php"class="cool-link">Home</a></li>
			<li><a href="./gallery.php"class="cool-link">Gallery</a></li>
			<li><a href="./contact.php"class="cool-link">Contact</a></li>
			<li><a href="./aboutus.php"class="cool-link">About us</a></li>
		
</div>
<!--This button allows access to the editing app-->
<button class="button button1" onclick="document.location='editor.php'">Let's edit</button>
<!--This button allows to log in into the app-->
<button class="button button2"  onclick="document.location='login.php'" >Log in</button>
<!--This button allows to register with the website-->
<button class="button button3"  onclick="document.location='register.php'">Register</button>

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
					<p>Insert description here</p>
				</div>
			</div>
		</div>



<!--This creates the pop up window for Irina-->
<div id="popupBoxTwoPosition">
			<div class="popupBoxWrapper">
				<div class="popupBoxContent">
				    <button id="close" onclick="toggle_visibility('popupBoxTwoPosition');">X</button>
					<h3><center>Irina Cristache</center></h3>
					<p>Insert description here</p>
				</div>
			</div>
		</div>







</body>
</html>