<!--  
	projects/web/webproject.php
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

	<title>Web Project</title>
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
	<h1>Web Project</h1>
		<div id="content">
		<p>
		For my final project in Brock's Web Development course, I created this website. I have wanted to make a site to
		host my software projects for a while, and this was the perfect excuse to actually do it. The assignment was to
		create a website of your own choosing and use HTML, CSS, Javascript and PHP.
		</p>
		</div>
		
		<div id="content">
		<p>
		The main menu is a Javascript dropdown menu that uses ordered lists and CSS called 
		<a href="http://www.scriptiny.com/2011/04/javascript-dropdown-menu/" target="blank">Tiny Dropdown Menu</a>. 
		I liked this menu because it was simple and functional, and could be styled easily. The contact page has a
		simple form designed to send an email. It uses Javascript to verify that the fields are filled in correctly, 
		and uses PHP to send the mail to my inbox. PHP was also used to create a common menu file for both the main menu
		and the footer menu. This enables each page to include the files, and the menus can be changed by editing a
		single file.
		</p>
		</div>
		
		<div id="content">
		<p>
		You can view the source to any of the HTML pages on the site, and below is a link to the main style sheet
		for the site.
		</p>
		</div>
		
		<p>
			<div id="content">
			<h2>Files</h2>
			<p/>
				<li>
					<a href="/css/Style.css">Main CSS sheet</a>
				</li>
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