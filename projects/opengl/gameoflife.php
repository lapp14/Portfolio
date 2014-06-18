<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="/css/Style.css" type="text/css" />
	<link rel="stylesheet" href="/css/tinydropdown.css" type="text/css" />
		
	<!-- google fonts -->
	<link href='http://fonts.googleapis.com/css?family=News+Cycle' rel='stylesheet' type='text/css'/>

	<title>Game of Life</title>
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
	<h1>Game of Life</h1>
		<div id="content">
		<p>
		For this assignment I implemented 
		<a href="http://en.wikipedia.org/wiki/Conway's_Game_of_Life" target="blank">Conway's Game of Life</a>
		in OpenGL.
		</p>
		</div>
		<div id="gallery">
		<img src="/images/gameoflife.png" alt="Game of Life"/>
		</div>
			
		
		<div id="content">
		<p>
		There are a few different options with this program. You can set the grid size when you start the program.
		To initialize the board, you can randomize the cells, or use the mouse to activate or deactivate cells. 
		There is a random colour option, where each colour is randomized. Each iteration, if the cell is alive, 
		the tone of the colour is adjusted with a gamma function based on the number of neighbors. 
		</p> 
			
		<p>
			<div id="content">
			<h2>Files</h2>
			<p/>
			<br/>
			This code is released to the public under the
			<a href="http://www.apache.org/licenses/LICENSE-2.0">Apache 2.0 licence</a>
				<ul>
				<li>
					<a href="/files/GameOfLife.exe">GameOfLife.exe</a> <span id="text">(release)</span>
				</li>
				<li>
					<a href="/files/GameOfLife.cpp">GameOfLife.cpp</a> <span id="text">(source)</span>
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