<?php
$name = $_POST['name'];
$email = $_POST['email'];
$cm = $_POST["comment"];

$message_body = "Name:" . $name . "<br>" . "Email:". $email ."<br>". "The visitor comment:" . $cm;
$header =  "From: info@sihope.org" . "\r\n".
		   "Reply-To: info@sihope.org" . "\r\n".
		   "X-Mailer: PHP/" .phpversion();
//echo $message_body; 
$result =mail("jpunzone@gmail.com","You have a new comment",$message_body,$header, "-finfo@sihope.org");

//mail("To Address", "Subject", "Email body", "Extra header (from)")
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
Thank you
</body>
</html>