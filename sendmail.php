<?php

$to = "hakk@rooter.se";
$from = $_POST["mail_address"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$message = $_POST["msg"];
$subject = "Contact form";

if (mail ($to, $subject, $message ,"From: $fname $lname <$from>")) {
	header("Location: index.php");
	
} else {
	header("Location: index.php")
}
?>