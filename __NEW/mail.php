<?php
    $name = $_POST['email'];
    $email = $_POST['name'];
    $message = $_POST['message'];
    $body="From: $name \n Message: $message";
    $recipient = "zombine.rar@gmail.com";
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";
    if ($_POST['submit']) {
        if (mail($recipient, $subject, $body, $mailheader)) {
            echo '<p>Thank you! Your message has been sent.</p>'
        } else {
            echo '<p>Oops! Something went wrong.</p>'
        }
    }
?>