<!DOCTYPE html>
<html>
<head>
<!--This editor is the standard one, the one does not require registering-->

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
	<link rel="stylesheet" type="text/css" href="./styles/allstyles.css">
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
		   <li><a href="./login.php">Log in</a><li>
		   <li><a href="./editor.php">Editor</a><li>
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
	
				<!--Buttons for filters-->
				<p><button id="lomo" class="filter">Lomo</button></p>
				<button id="clarity" class="filter">Clarity</button>
				<p><button id="hazydays" class="filter">Smooth but Foggy</button></p>
				<button id="sunrise" class="filter">Memories</button>
	
				
				<!--Message-->
				<h4>For our colour themed filters and premium effects, please create an account.</h4>
			</div>
				<img id="image" class="img" src="./images/27.png">
		</div>
		
	<!--The button which allows to register with the website-->
	<button class="button button1"  onclick="document.location='register.php'">Register!</button>




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
