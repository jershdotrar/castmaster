<?php $name = $_POST['email'];
$email = $_POST['name'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "contact@castmastereducation.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Oops!");
echo "Thank You!";
?>