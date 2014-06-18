<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="/css/Style.css" type="text/css" />
	<link rel="stylesheet" href="/css/tinydropdown.css" type="text/css" />
		
	<!-- google fonts -->
	<link href='http://fonts.googleapis.com/css?family=News+Cycle' rel='stylesheet' type='text/css'/>

	<title>Android Brick Breaker</title>
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
		include($_SERVER['DOCUMENT_ROOT'] . "/php/menu.php");
	?>
	
	<div class="contentContainer">
	<p>
	<h1>Android Brick Breaker</h1>
		<div id="content">
		<p>
		During Brock's Mobile Development course, Matt Hills and I designed this Android app for our final project. This
		was a good class, and it was heavily project driven. With no tests, only a presentation, two assignemnts and project,
		we were able to really focus on practicing our Android programming. We had to pick one advanced Android api that was
		not covered in class to use in our project. We also had to present in class on the api as well. We decided to 
		implement a classic Brick Breaker style game using the android 
		<a href="http://developer.android.com/reference/android/hardware/Sensor.html" target="blank">Sensor</a> library. 
		The user has to tilt the phone back and forth to move the bar along the bottom of the screen.
		</p>
		<p>
		Below are a few screenshots of our app running in the emulator. The sensors do not work in the emulator, but on a
		real device the tilt function works.
		</p>
		</div>

		<div id="gallery">
		<a href="/images/brick_main.png"><img src="/images/brick_main.png" width="175" height="202" alt="Main Screen"/></a>
		<a href="/images/brick1.png"><img src="/images/brick1.png" width="175" height="202" alt="Brick Breaker"/></a>
		<a href="/images/brick2.png"><img src="/images/brick2.png" width="175" height="202" alt="Brick Breaker"/></a>
		</div>
			
		<div id="content">
		We used the Android canvas to draw the graphics. Canvas was a perfect way to draw the objects, as the rich java
		libraries really helped in implementation. Canvas has anti aliasing in one line of code for the ball and text.
		Java's Rect also allowed for easy collision detection, and could distinguish between top/bottom and left/right collision
		by getting the intersection of two Rects with minimal code.
		</div>
		
		<div id="content">
		Each level gets progressively harder with more and more bricks each time you beat a level. The levels are randomly generated.
		The bricks themselves require 1-3 hits to make the brick disappear, and will lighten in color when impacted with the ball, as
		shown in the screenshots. 
		</div>
		
		<div id="content">
		When the user loses all lives, the game ends. There is a list of highscores that is stored locally on the device, and the user's
		best score is displayed on the home screen. There is also an option in settings that allows you to upload your high score
		to the internet to compete with other players. The score is uploaded to our database online using JSON. 
		</div>
		
		<div id="gallery">	
		<a href="/images/brick_gameover.png"><img src="/images/brick_gameover.png" width="175" height="202" alt="Game Over Screen"/></a>
		</div>
		
		<div id="content">
		We ended up being quite happy with the result of this game, especially since we made the entire thing in around three weeks
		during a particularly crazy time of year, with 5 classes to handle at a time. You can find the source code for the Eclipse
		ADT project on GitHub. Also provided is a link to our presentation on Android sensors.
		</div>
		
		<p>
			<div id="content">
			<h2>Files</h2>
			<p/>
			<ul>
				<li>
					<a href="https://github.com/MattHills/BrickBreaker">Source Code</a><span id="text"> (GitHub)</span>
				</li>
				<li>
					<a href="/files/3V97 Presentation.pdf">Sensor Presentation</a><span id="text"> (.pdf)</span>
				</li>
			</ul>
			</div>	
		</p>		
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