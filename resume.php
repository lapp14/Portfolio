<!--  
	project/resume.html
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
		include("menu.php");
	?>
	
	<div class="contentContainer" style="height: 800px; margin-bottom:25px">
	<a href="Resume.pdf">Download</a> a copy<br/>
	<object data="Resume.pdf" type="application/pdf" width="100%" height="100%" style="padding-top: 15px">
	&nbsp;of my resume.
	</object>
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