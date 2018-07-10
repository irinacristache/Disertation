<!DOCTYPE html>
<html>
<head>
	<title>Photo editor</title>
	<link rel="stylesheet" type="text/css" href="./styles/styles-editor.css">
	<link rel="stylesheet" type="text/css" href="./styles/allstyles.css">
	<script type="text/javascript" src="editor-main.js"></script>
	<script type="text/javascript" src="caman.full.min.js"></script>
</head>

<body>
<!--This creates the top menu-->
<div class="container1" align="center">
			<li><a href="./home.php"class="cool-link">Home</a></li>
			<li><a href="./gallery.php"class="cool-link">Gallery</a></li>
			<li><a href="./contact.php"class="cool-link">Contact</a></li>
			<li><a href="./aboutus.php"class="cool-link">About us</a></li>

</div>


<div class="editor">
			<div class="tools">
				<button id="save">Save</button>
				<button id="reset">Reset</button>
				<input type="file" id="load" />
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
	
				<!--Buttons for filters-->
				<button id="lomo"class="filter">Lomo</button>
				<button id="clarity"class="filter">Clarity</button>
				<button id="hazydays"class="filter">Smooth but Foggy</button>
				<button id="herMajesty"class="filter">Pink</button>
				<button id="love"class="filter">Red for Love</button>
				<button id="crossProcess"class="filter">Purple Vibe</button>
				<button id="orangePeel"class="filter">Orange</button>
				<button id="glowingSun"class="filter">Yellow</button>
				<button id="jarques"class="filter">Gray Area</button>
				<button id="grungy"class="filter">Welcome to the Dark Side</button>
				<button id="sinCity"class="filter">Black & White</button>
				<button id="pinhole"class="filter">Black & White (Smooth)</button>
				<button id="vintage"class="filter">Vintage</button>
				<button id="sunrise"class="filter">Memories</button>
				
				<!--Add text over image-->
				<h4>Add a message over your image:</h4>
				<input type="text" id="message" placeholder="Type a message">
				<button id="submit">Add Text</button>
				
			</div>
			<img id="image" class="img" src="./images/19.png">
		</div>
		
		
		
	</body>
</html>
