<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$email_from = 'vidhi-portfolio.git.io';

	$email_subject = "New Form Submission";

	$email_body ="User Name: $name.\n".
				  "User Email: $visitor_email.\n".
				  "User Message: $message.\n".
				  "User Subject: $subject.\n";

	$to = "vidhideshmukh1705@gmail.com";

	$headers = "From: $email_from \r\n";

	$headers = "Reply-To: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Loction: index.html");
?>