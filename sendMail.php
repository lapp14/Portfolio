#!/usr/bin/php-cgi
<?php
	$to = "d.lapp14@gmail.com";
	$subject = $_POST["subject"];
	$header = "From:".$_POST["from"];
	$message = $_POST["message"];
	
	mail($to, $subject, $message, $header);
	header('Location: index.html');
?>