#!/usr/bin/php-cgi
<?php
	$filename = 'Resume.pdf';
	$filepath = '../'.$filename;
	$type = $_FILES['file']['type'];
	
	if($_FILES['file']['error'] > 0){
		die("Upload error");
	}
	
	/* if over 1 Mb */
	if($_FILES['file']['size'] > 1048576){
		die("File size too big");
	}
	
	/* make sure its a pdf */
	if($type == 'application/pdf'){
		move_uploaded_file($_FILES['file']['tmp_name'], $filepath);
		echo("Resume uploaded successfully.");
		
	} else {
		die("Only pdf files are allowed");
	}
	
	
?>
