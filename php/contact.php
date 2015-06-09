<?php
/**
 * Contact form controller
 */

if (isset($_POST["submit"])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$from = $_POST['email'];
	$to = 'james@appists.com';
	$subject = $_POST['name'];

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
		}
	}
}
?>

<!doctype html>
<html>
	<head lang="en">
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>James Hill</title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
		<!-- Optional theme -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css" />
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
		<!-- Google Fonts -->
		<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'/>
		<link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="/img/blackzia.ico">

		<!-- Custom Stylesheet -->
		<link rel="stylesheet" type="text/css" href="/css/custom.css"/>

		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script type="text/javascript" src="/lib/modernizr.js"></script>
	</head>
	<body>

				<?php echo $result; ?>

		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	</body>
</html>