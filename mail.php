<?php 
$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$message = $_POST['message'];
$recipient = "cameronzaas@gmail.com";
$subject = "CZAAS.COM: Message from $name";
$mailheader = "From: czaas.com \r\n";
$body = "\n From: $name\n Phone number: $number \n email: $email \n Message: $message";
mail($recipient, $subject, $body, $mailheader) or
die('Error!');
header('Location: index.php');
?>