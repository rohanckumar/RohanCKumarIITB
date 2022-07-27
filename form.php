<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$comment = $_POST['comment'];
$email_from = 'sureshnayak6281@gmail.com';
$email_subject= 'New Form Submission';
$email_body = "User Name: $name.\n". "User Email: $visitor_email.\n". "User Message: $comment.\n";
$to = 'rohanck2001@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>