<!--  
	project/pfountain.html
	Dan Lapp
	COSC 2P89
	Fall 2013
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="../css/Style.css" type="text/css" />
	<link rel="stylesheet" href="../css/tinydropdown.css" type="text/css" />
		
	<!-- google fonts -->
	<link href='http://fonts.googleapis.com/css?family=News+Cycle' rel='stylesheet' type='text/css'/>

	<title>GL Particle Fountain</title>
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
		include("../menu.php");
	?>
	
	<div class="contentContainer">
	<p>
	<h1>Particle Fountain</h1>
		<div id="content">
		<p>
			For this assignment, I had to implement a particle fountain in OpenGL. It sprays particles into the air
		and then they bounce off the ground toward the edges of the screen, based on randomized direction and velocity.
		This assignment really got me started with 3d graphics programming in OpenGL. I used 3d perspective, lighting,
		different polygon modes, and shading.
		</p>

		<div id="gallery">
		<a href="../images/pfount1.png"><img src="../images/pfount1.png" height="316" width="308" alt="Wireframe Mode"/></a>
		<a href="../images/pfount2.png"><img src="../images/pfount2.png" height="316" width="308" alt="Polygon Mode"/></a>				
		</div>
			
		<div id="content">
		<p>
			I used glut menus for most of the options, and you can right click to bring up the menu. There are a couple 
			different firing modes you can toggle on or off. Spray mode makes the particles spray higher up into the air.
			Fireworks mode shoots all of the particles up into the air at once. All of the options work alongside each other,
			so you can use other options, like randomizing spin, colour, speed and size at the same time. You can toggle
			friction on and off, so that when the particles hit the ground they lose some velocity. 
		</p>
		</div>
		
		<div id="content">
		<p>
			There are three polygon modes you can set as well. There is the regular polygon mode, which you can set the type
		of shading, flat or gouraud. There is a wireframe mode, where the outline of each object is shown, and a points mode,
		where just the vertices of the particles are drawn.
		</p>
		</div>
		
		<div id="content">
		<p>
			You can also spin the scene about the x, y or z axis by pressing 'x', 'y' or 'z' respectively and using the left and
		right arrow keys. These all work together as well. To fire particles, Spacebar will fire many particles at once. 
		Holding down 'f' gives you manual fire mode, and pressing Enter will fire one particle at a time.
		</p>
		</div>
			
		<p>
			<div id="content">
			<h2>Files</h2>
			<p/>
			<br/>
			This code is released to the public under the
			<a href="http://www.apache.org/licenses/LICENSE-2.0">Apache 2.0 licence</a>
				<ul>
				<li>
					<a href="../files/ParticleFountain.exe">ParticleFountain.exe</a> <span id="text">(release)</span>
				</li>
				<li>
					<a href="../files/ParticleFountain-src.zip">Source Code</a> <span id="text">(zipped)</span>
				</li>
				</ul>
			</div>	
		</p>
			
		</div>
	</p>	
	</div>
	
	<?php
		include("../footerMenu.php");
	?>
	
</div>

<!-- code used from    http://www.scriptiny.com/2011/04/javascript-dropdown-menu/ -->
<script type="text/javascript" src="../javascript/tinydropdown-min.js"></script>
<script type="text/javascript">
var dropdown=new TINY.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>