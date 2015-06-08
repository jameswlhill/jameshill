<?php
/**
 * Contact form controller
 */

if (isset($_POST["submit"])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$from = 'PWP Contact Form';
	$to = 'james@appists.com';
	$subject = 'Message from Contact Form ';

	$body = "From: $name\n E-Mail: $email\n Message:\n $message";

	// Check if name has been entered
	if (!isset($_POST['name'])) {
		$errName = 'Please enter your name';
	}

	// Check if email has been entered and is valid
	if (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errEmail = 'Please enter a valid email address';
	}

	//Check if message has been entered
	if (!isset($_POST['message'])) {
		$errMessage = 'Please enter your message';
	}

// If there are no errors, send the email
	if (!isset($errName) && !isset($errEmail) && !isset($errMessage)) {
		if(mail($to, $subject, $body)) {
			$result = '<div class="alert alert-success">Thank You! I will be in touch</div>';
			echo $result;
		}
	}
}


?>