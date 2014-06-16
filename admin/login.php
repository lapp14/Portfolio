#!/usr/bin/php-cgi
<?php
	$password=$_POST["password"];
	
	if($password == "brocku")
		allowAccess();
	else
		denyAccess();
		
		
function allowAccess(){
	echo("
	<html>
	<head>
		<title>Site Admin</title>
	</head>

	<body>
	<p>
	<a href=\"../index.html\">Exit</a>
	</p>
		<form action=\"upload.php\" method=\"post\" enctype=\"multipart/form-data\">
		<div style=\"float: left;  margin: 10px;\"/>
		<label for=\"file\">Upload Resume:</label>
		</div>
		
		<div style=\"float: left; margin: 10px;\">
			<input type=\"file\" name=\"file\" id=\"file\"/><br/>
			<input type=\"submit\" name=\"upload\" value=\"Upload File\"/>
		</div>
		</form>


	</body>
	</html>");
}

function denyAccess(){
	header('Location: ../index.html');
}
?>
