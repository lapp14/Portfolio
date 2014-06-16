<!--  
	project/projects.html
	Dan Lapp
	COSC 2P89
	Fall 2013
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="css/Style.css" type="text/css" />
	<link rel="stylesheet" href="css/tinydropdown.css" type="text/css" />
		
	<!-- google fonts -->
	<link href='http://fonts.googleapis.com/css?family=News+Cycle' rel='stylesheet' type='text/css'>

	<title>Software Projects</title>
</head>
<body>
<div class="outerContainer">
		
	<div class="titleContainer">
	<p>
		<span class="titleHeader">Dan Lapp</span><br/>
		<span class="titleSubheader">Personal Homepage & Software Experience</span>
	</p>
	</div>
	
	<?php
		include("menu.php");
	?>
	
	<div class="contentContainer">
	<p>
	<h1>Software Projects</h1>
		<div id="content">
		Here you can find information on some of the more interesting software projects I have worked on.
		Most of the programs here were written as assignments during my undergrad at Brock University.
		Each one of these projects I enjoyed working on, and you can find some source code and binary
		files in the project listings.
		</div>
	</p>
		
		<div id="content">	
			<p>
			<h2>OpenGL</h2>
				<div id="content">	
				These are some assignment questions and the final project for Brock's Computer Graphics course,
				COSC 3P98. This is a class I really enjoyed, and I learned alot about OpenGL programming. For
				the final project I worked with Taras Mychaskiw, and we created a pool game using 3D models
				and physics.
				
					<div id="content">	
					<ul>
						<li><a href="opengl/pool.html">3D Pool</a></li>
						<li><a href="opengl/pfountain.html">Particle Fountain</a></li>
						<li><a href="opengl/gameoflife.html">Conway's Game of Life</a></li>
					</ul>			
					</div>
				</div>
			</p>
			
			<p>
			<h2>Android</h2>
				<div id="content">	
				During the course of Brock's Mobile Development course COSC 3V97, we were to develop an Android
				application, and give an in class presentation on an Android library. Matt Hills and myself 
				developed a Brick Breaker game, that uses the device's accelerometer to move the bar along
				the bottom of the screen.
					<div id="content">	
					<ul>
						<li><a href="brickbreaker.html">Brick Breaker</a></li>
					</ul>			
					</div>
				</div>
			</p>
			
			<p>
			<h2>Web Development</h2>
				<div id="content">	
				In Brock's Web Development course COSC 2P89, our final project was to design a full website using
				HTML, CSS, Javascript and PHP. I decided to design this very website for my final project, so I could
				both create a website for my project and one I can use as well.
					<div id="content">	
					<ul>
						<li><a href="webproject.html">Web Project</a></li>
					</ul>			
					</div>
				</div>
			</p>
		</div>
	
	
	
	
	</div>
	
	<?php
		include("footerMenu.php");
	?>
	
</div>

<!-- code used from    http://www.scriptiny.com/2011/04/javascript-dropdown-menu/ -->
<script type="text/javascript" src="javascript/tinydropdown-min.js"></script>
<script type="text/javascript">
var dropdown=new TINY.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>