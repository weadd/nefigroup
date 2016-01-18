<?php 

	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	$formContent = "From : $name \n Message: $message";
	$recipient = "odeloic@gmail.com";
	$subject = "Message";
	$mailheader = "From: $email \r\n";
	mail($recipient, $subject, $formContent, $mailheader) or die("Error sending Message");
	echo "Thank You!";

?>