<!--  
	project/opengl.html
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
	<link href='http://fonts.googleapis.com/css?family=News+Cycle' rel='stylesheet' type='text/css'/>

	<title>OpenGL Projects</title>
</head>
<body>

<div class="outerContainer">
		
	<div class="titleContainer">
	<p>
		<span class="titleHeader">Dan Lapp</span><br/>
		<span class="titleSubheader">Personal Homepage &amp; Software Experience</span>
	</p>
	</div>
	
	<?php
		include("menu.php");
	?>
	
	<div class="contentContainer">
	<p>
	<h1>OpenGL</h1>
		<div id="content">	
		These are some assignment questions and the final project for Brock's Computer Graphics course,
		COSC 3P98. This is a class I really enjoyed, and I learned alot about OpenGL programming. 
		I created a 3d particle fountiain, and implemented Conway's Game of Life for two of my assignments. For
		the final project I worked with Taras Mychaskiw, and we created a pool game using 3D models
		and physics.
		
			<div id="content">	
			<ul>
				<li><a href="opengl/pool.php">3D Pool</a></li>
				<li><a href="opengl/pfountain.php">Particle Fountain</a></li>
				<li><a href="opengl/gameoflife.php">Conway's Game of Life</a></li>
			</ul>			
			</div>
		</div>
	</p>	
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