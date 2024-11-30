<?php
$msg = $_GET["message"];
$fname = $_GET["fname"];
$lname = $_GET["lname"];
$email = $_GET["email"];
$formcontent = "Fra: $fname $lname \n E-mail: $email \n Besked: $msg";
$recipient = "slangerupgade-adm@outlook.dk";
$subject = "Ny besked";
$mailheader = "From: admin@slangerupgade.dk" . "\r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location: tak.html");
?>