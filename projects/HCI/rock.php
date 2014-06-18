<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="/css/Style.css" type="text/css" />
	<link rel="stylesheet" href="/css/tinydropdown.css" type="text/css" />
		
	<!-- google fonts -->
	<link href='http://fonts.googleapis.com/css?family=News+Cycle' rel='stylesheet' type='text/css'/>

	<title>Rock Radio</title>
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
	<h1>Rock Radio</h1>
		<div id="content">
		<p>
			During my Human Computer Interaction class I learned alot about user interface design, best practices, and human tendencies.
		I learned how and how not to present information to users not only in software, but other aspects of day to day life as well. Our 
		semester long project was to create UIs for an internet radio station. We had to decide on what platform(s) we would be supporting,
		and create both a front end for users, and an administration UI for the DJs. The goal was not to create a functioning radio station
		complete with inner workings, but to create an easy to use, attractive and consistent user interface, that people will love to use.
		</p>
		
		<p>
			I created mine using HTML, CSS, jQuery and Twitter's Bootstrap. On this site I didn't worry about cross browser compatability,
		simply because it was not required, and it was not the purpose of this assignment. The focus was the user interface itself. Therefore
		the actual implementation was intended for Webkit browsers only. It works as intended with Google Chrome.
		</p>
		
		<p>
			I went with a flat UI for this site. The main page has the radio player, complete with Bootstrap glyphicons and graphics. I used
			jQuery to add behaviour to the button and volume control, however they don't actually do anything. There is an "Expand Player" button
			used to pop out the player into it's own compact window. This allows the user to listen to the radio while navigating away from the main
			page. The forms are fully functional except for actually sending the information to the server.
		</p>

		<div id="gallery">
		<a href="/images/rockradio_main1.png"><img src="/images/rockradio_main1.png" height="295" width="386" alt="Rock Radio"/></a>
		<a href="/images/rockradio_main2.png"><img src="/images/rockradio_main2.png" height="295" width="386" alt="Rock Radio"/></a>			
		</div>
		
		<p>
			Here you can see the popout player. This a new compact window that is created when the user presses the "Expand Player" button.
			It allows the user to continue listening while enabling them to navigate away from the main site.
		</p>

		<div id="gallery">
		<a href="/images/rockradio_player.png"><img src="/images/rockradio_player.png" height="434" width="308" alt="Rock Radio Player"/></a>			
		</div>
		
		<p>
			Here is the DJ's administration page. I like to think it is pretty self explanitory. The iTunes interface inspired me for this user
		interface design, because I have always found it simple to be able to select a song. The lists are jQuery selectable lists, and are 
		interactive. They just don't have real functionality, as this would be beyond the scope of the project, requiring a database, PHP and ajax.
		</p>

		<div id="gallery">
		<a href="/images/rockradio_admin.png"><img src="/images/rockradio_admin.png" height="357" width="496" alt="Rock Radio DJ Admin"/></a>			
		</div>
		
		
		<p>
			<div id="content">
			
			<h2>View the Website</h2>
			<p/>
			<ul>
			<li>
				<a href="/RockRadio/" target="blank">Main Site</a>
			</li>
			<li>
				<a href="/RockRadio/mobile_app.html" target="blank">Mobile App</a>
			</li>
			<li>
				<a href="/RockRadio/admin/" target="blank">DJ Admin</a>
			</li>
			</ul>	
			</div>	
			
			<div id="content">
			<h2>Files</h2>
			<p/>
				<ul>
				<li>
					<a href="https://github.com/lapp14/RockRadio" target="blank">Source Code</a> (GitHub)
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