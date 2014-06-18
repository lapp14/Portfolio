<!--  
	/projects/opengl/pool.php
	Dan Lapp
	COSC 2P89
	Fall 2013
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="/css/Style.css" type="text/css" />
	<link rel="stylesheet" href="/css/tinydropdown.css" type="text/css" />
		
	<!-- google fonts -->
	<link href='http://fonts.googleapis.com/css?family=News+Cycle' rel='stylesheet' type='text/css'/>

	<title>GL Billiards</title>
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
		include($_SERVER['DOCUMENT_ROOT'] . "/php/menu.php");
	?>
	
	<div class="contentContainer">
	<p>
	<h1>GL Billiards</h1>
		<div id="content">
		<p>
			For the final project of my Computer Graphics course at Brock, I worked with Taras Mychaskiw
		to create a pool game with 3d graphics and real time physics. This team ended up working out perfectly,
		considering Taras has a bachelors in physics, I have had a few years experience with 3D Studio Max and Photoshop, 
		and we were both experienced with C++. We ended up with a final product we were both very happy with, and the
		game works quite well.
		</p>

		<div id="gallery">
		<a href="/images/pool1.png"><img src="/images/pool1.png" height="256" width="328" alt="gl-billiards"/></a>
		<a href="/images/pool2.png"><img src="/images/pool2.png" height="256" width="328" alt="gl-billiards"/></a>		
		<a href="/images/pool3.png"><img src="/images/pool3.png" height="256" width="328" alt="gl-billiards"/></a>		
		</div>
		
		<p>
			We used 3D Studio Max to create and texture all the models. This allows the modelling program to take
		care of all the vertex coordinates, polygon faces, and texture mapping coordinates. For a pool table with 
		as many vertices as ours, this would be virtually impossible to directly program. We added a .3ds file 
		parser to import models using portions of code from the tutorials at 
		<a href="http://www.spacesimulator.net" target="blank">spacesimulator.net</a>. 
		I handled all of the modelling, texturing and file import into our program.
		</p>
		
		<p>
			Taras used his experience with physics to handle all of the collision detection. There are a few different 
		types of collisions: ball to ball, ball to rail, and ball to pocket. What made this interesting is trying to 
		get the balls to roll properly. Getting one ball to roll properly was fine, but when balls hit each other multiple 
		times, the angles change based on where they were hit.			
		</p>
		
		<p>
			We used the GLUT for the window creation, so using 
			<a href="http://glui.sourceforge.net/" target="blank">GLUI</a>
			 for the user interface ended up being a good idea. The 
			controls work quite well, and the rotation controls ended up being the perfect type of control for rotating 
			the cue and the camera.
		</p>
		
		<p>
			<div id="content">
			<h2>Files</h2>
			<p/>
				<ul>
				<li>
					<a href="/files/gl-billiards.zip">gl-billiards.zip</a> <span id="text">(release)</span>
				</li>
				<li>
					<a href="https://github.com/twentylemon/gl-billiards" target="blank">Source Code</a>
				</li>
				<li>
					<a href="/files/gl-billiards-readme.pdf">Readme</a><span id="text">: 
					describes the project in greater detail, also contains user manual</span>
				</li>
				</ul>
			</div>	
		</p>
		
		</div>
	</p>	
	</div>
	
	<?php
		include($_SERVER['DOCUMENT_ROOT'] . "/php/footerMenu.php");
	?>
	
</div>

<!-- code used from    http://www.scriptiny.com/2011/04/javascript-dropdown-menu/ -->
<script type="text/javascript" src="/javascript/tinydropdown-min.js"></script>
<script type="text/javascript">
var dropdown=new TINY.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>