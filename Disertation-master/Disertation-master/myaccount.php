
<?php
	session_start();
	print_r($_SESSION);
	if(!isset($_SESSION['loggedIn']) || (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === 0) )
	{
		$_SESSION['loggedIn'] = 0;
		header("Location: login.php");
	}
?>



<!DOCTYPE html>
<html>
<head>
<!--This is the premium editor, the one that requires registering-->

	<title>Photo editor</title>
	
	<!--Import CSS files-->
	<link rel="stylesheet" type="text/css" href="./styles/styles-editor.css">
	<link rel="stylesheet" type="text/css" href="./styles/allstyles.css">
	
	
	<!--Import JS libraries -->
	<script type="text/javascript" src="editor-main.js"></script>
	<script type="text/javascript" src="caman.full.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	
	<script type ="text/javascript">
		
		$(function () {
		$(window).on('beforeunload', function()
								 
								 {
									//Alert box will appear when the user tries to close the tab.
									return '';
									})	
			});
	</script>
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
	
</head>

<body>
	
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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
		   <li><a href="./logout.php">Log out</a><li>
		   <li><a href="./editor.php">Standard Editor</a><li>
		   <li><a href="./personalise.php">Customise the website</a><li>
		</ul>
		
		</div>



<div class="editor">
			<div class="tools">
				<button id="save">Save</button>
				<button id="reset">Reset</button>
				<input type="file" id="load" />
				<input id="width" type="text" placeholder="Insert desired photo width"/><br>
				<input id="height" type="text" placeholder="Insert desired photo height"/><br>
				<input id="x" type="text" placeholder="X Starting position"/><br>
				<input id="y" type="text" placeholder="Y Starting position"/><br>
				<button id="preview">Preview</button>
				<button id="crop">Crop</button>
				
<!--Slider effects which can be adjusted by dragging the button to the left or to the right-->				
				<!--Slider Brightness-->
				<p>
					<label for="brightness">Brightness</label>
					<input id="brightness" name="brightness" type="range" min=-100 max=100 value=0>
	
				</p>
				<!--Slider Vibrance-->
				<p>
					<label for="vibrance">Vibrance</label>
					<input id="vibrance" name="vibrance" type="range" min=-100 max=100 value=0>

				</p>
				<!--Slider Hue-->
				<p>
					<label for="hue">Hue</label>
					<input id="hue" name="hue" type="range" min=-100 max=100 value=0>
	
				</p>
				<!--Slider Gamma-->
				<p>
					<label for="gamma">Gamma</label>
					<input id="gamma" name="gamma" type="range" min=-0 max=10 value=0>
	
				</p>
				
				<!--Slider Contrast-->
				<p>
					<label for="contrast">Contrast</label>
					<input id="contrast" name="contrast" type="range" min=-20 max=20 value=0>
				</p>
				
				<!--Slider Sharpen (very slow)-->
				<p>
					<label for="sharpen">Sharpen</label>
					<input id="sharpen" name="sharpen" type="range" min=-100 max=100 value=0>
				</p>
				
				<!--Slider Saturation-->
				<p>
					<label for="saturation">Saturation</label>
					<input id="saturation" name="saturation" type="range" min=-100 max=100 value=0>
				</p>
				
				<!--Slider Exposure-->
				<p>
					<label for="exposure">Exposure</label>
					<input id="exposure" name="exposure" type="range" min=-100 max=100 value=0>
				</p>
				
				<!--Slider Noise-->
				<p>
					<label for="noise">Noise</label>
					<input id="noise" name="noise" type="range" min=-100 max=100 value=0>
				</p>
				
				<!--Slider Sepia-->
				<p>
					<label for="sepia">Sepia</label>
					<input id="sepia" name="sepia" type="range" min=-100 max=100 value=0>
				</p>
				
				<!--Slider Clip-->
				<p>
					<label for="clip">Clip</label>
					<input id="clip" name="clip" type="range" min=-100 max=100 value=0>
				</p>
				
				<!--Slider stackBlur-->
				<p>
					<label for="stackBlur">stackBlur</label>
					<input id="stackBlur" name="stackBlur" type="range" min=-100 max=100 value=0>
				</p>
				
				<!--Add text over image-->
				<h4>Add a message over your image:</h4>
				<input type="text" id="message" placeholder="Type a message">
				<button id="submit">Add Text</button>
				
				<!--Buttons for filters-->
				<h3>Edit by colour theme</h3>
				<button id="herMajesty" class="filter">Pink</button>
				<button id="love" class="filter">Red for Love</button>
				<button id="crossProcess" class="filter">Purple Vibe</button>
				<button id="orangePeel" class="filter">Orange</button>
				<button id="glowingSun" class="filter">Yellow</button>
				<button id="jarques" class="filter">Gray Area</button>
				<p><h3>Edit using special effects</h3></p>
				<button id="lomo" class="filter">Lomo</button>
				<button id="clarity" class="filter">Clarity</button>
				<button id="hazydays" class="filter">Smooth but Foggy</button>
				<h3>Vintage edits</h3>
				<p><button id="grungy" class="filter">Welcome to the Dark Side</button></p>
				<button id="sinCity" class="filter">Black & White</button>
				<button id="pinhole" class="filter">Black & White (Smooth)</button>
				<button id="vintage" class="filter">Vintage</button>
				<button id="sunrise" class="filter">Memories</button>
				

	
				
			
		</div>
				<img id="image" class="img" src="./images/19.png">
		</div>
		





<!---Social media buttons-->	
<div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style" style="left:0px; top:150px;">
    <a class="a2a_button_facebook"></a>
    <a class="a2a_button_twitter"></a>
    <a class="a2a_button_google_plus"></a>
    <a class="a2a_button_pinterest"></a>
    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
</div>

<script async src="https://static.addtoany.com/menu/page.js"></script>
		

	
</div>
</body>
</html>




