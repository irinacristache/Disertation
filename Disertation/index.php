<!DOCTYPE HTML>
<html>
	<head>
		<title>My Photo Editor</title>
		<link rel="stylesheet" type="text/css" href="main.css">
		<script type="text/javascript" src="main.js"></script>
		<script type="text/javascript" src="caman.full.min.js"></script>
		
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	</head>
	<body>
		<h1>My Photo Editor</h1>
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
			<img id="image" class="img" src="./images/13.jpg">
		</div>
		
		
		
	</body>
</html>