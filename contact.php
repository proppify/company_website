<?php
// Get data from form
$name = $_POST['name'];
$email= $_POST['email'];
$email= $_POST['phone'];
$message= $_POST['message'];

$to = "proppfiy@gmail.com";

$subject = "Enquiry from website";


$txt ="Name = ". $name . "\r\n Email = "
	. $email . "\r\n Message =" . $message;

$headers = "From: noreply@proppify.in" . "\r\n" .
			"CC: contact@proppify.in";
if($email != NULL) {
	mail($to, $subject, $txt, $headers);
}

// Redirect to
header("Location:index.html");
?>
