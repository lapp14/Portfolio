<!--  
	project/contact.html
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

	<title>Contact Me</title>
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
	<h1>Email Me</h1>	
		<div id="content">
			<form name="sendEmail" action="sendMail.php" onsubmit="return validateForm();" method="post">
				<span>From Email: <input type="text" name="from"/>*</span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<span>Subject: <input type="text" name="subject"/></span><br/>&nbsp;<br/>
				
				<textarea rows="15" cols="80" name="message"></textarea><br/>
				<span style="font-size: 0.6em">* = Required Field</span>
				<br/>&nbsp;<br/>
				
				<input type="submit" value="Send Email" id="button"/> 
			</form>
		</div>
	</p>
	</div>
	
	<?php
		include("footerMenu.php");
	?>
	
</div>

<script type="text/javascript" src="javascript/emailvalidate.js"></script>

<!-- code used from    http://www.scriptiny.com/2011/04/javascript-dropdown-menu/ -->
<script type="text/javascript" src="javascript/tinydropdown-min.js"></script>
<script type="text/javascript">
var dropdown=new TINY.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>