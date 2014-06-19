<?php
	$to = "d.lapp14@gmail.com";
	$subject = "Dan Lapp " . $_POST["subject"];
	$header = "From:admin@danlapp.com";
	$message = $_POST["message"];
	$message = wordwrap($message, 70);
	$message = $message . "\n\nFrom: " . $_POST["from"];
	
	$mailSent = mail($to, $subject, $message, $header);
	header('Location: /index.php');
?>