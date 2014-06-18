<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="css/Style.css" type="text/css" />
	<link rel="stylesheet" href="css/tinydropdown.css" type="text/css" />
	
	<!-- google fonts -->
	<link href='http://fonts.googleapis.com/css?family=News+Cycle' rel='stylesheet' type='text/css'/>

	<title>Dan Lapp</title>
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
	<h1>About Me</h1>	
		<div id="content">
		Welcome to my homepage. My name is Dan, and this is a place where you can find information about myself
		and some of the more interesting software projects I have worked on. You can find binary releases and source
		code of my programs.
		</div> 
	</p>
	
	<p>
	<h2>Education</h2>	
		<div id="content">
			<ul>
				<li>
					BSc Computer Science (Honors) from
					<a href="http://www.cosc.brocku.ca">Brock University</a> in St. Catharines, Ontario (2014) 
				</li>
				<li>
					Have taken several web related classes at Brock including Databases (SQL), Web Development, Human Computer Interaction (UI design)
				</li>
				<li>
					Have taken many classes focused on software engineering such as Advanced Data Structures, Advanced Object Orientation, Software Engineering, Design Documentation and Prototyping, Procedural Programming, and Algorithms
				</li>
			</ul>
		</div>
	</p>
	
	<p>
	<h2>Interests</h2>	
		<div id="content">
		My main interests in terms of computer science are software applications. I enjoy writing 
		user applications and Object-Oriented programming. I am most experienced with Java and C/C++, however I am
		familiar with C#, Python and logic programming with Prolog. I also enjoy making websites, and have experience with
		HTML, CSS, Javascript, PHP, and SQL.
		</div>
	</p>
	</div>
	
	<?php
		include($_SERVER['DOCUMENT_ROOT'] . "/php/footerMenu.php");
	?>
	
</div>

<!-- code used from    http://www.scriptiny.com/2011/04/javascript-dropdown-menu/ -->
<script type="text/javascript" src="javascript/tinydropdown-min.js"></script>
<script type="text/javascript">
var dropdown=new TINY.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>