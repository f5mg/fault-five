<?php
$to = "david@69koi.com";
$from = "hello@69koi.com";
$subject = "Contact Form Submission";
$name = $_POST['name'];
$email = $_POST['email'];
$txt = "$name has requested a follow up at this email: $email";
$headers = "From: $from\r\nReply-to: $email";

mail($to,$subject,$txt,$headers);

header("Location: https://69koi.com/thanks.php");
?>