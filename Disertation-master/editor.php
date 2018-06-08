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
				<!--Buttons for filters-->
				<button id="vintage"class="filter">Vintage</button>
				<button id="lomo"class="filter">Lomo</button>
				<button id="clarity"class="filter">Clarity</button>
				<button id="orangePeel"class="filter">Orange Peel</button>
				
				<!--Add text over image-->
				<h4>Add a message over your image:</h4>
				<input type="text" id="message" placeholder="Type a message">
				<button id="submit">Add Text</button>
				
			</div>
			<img id="image" class="img" src="./images/19.png">
		</div>
		
		
		
	</body>
</html>