<?php
$name = $_POST['name'];
$email = $_POST['email'];
$cm = $_POST["comment"];

$message_body = "Name:" . $name . "<br>" . "Email:". $email ."<br>". "The visitor comment:" . $cm;

//echo $message_body; 
amirsa97@gmail.com
$result =mail("jpunzone@gmail.com","You have a new comment",$message_body,"From: info@sihope.org");
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