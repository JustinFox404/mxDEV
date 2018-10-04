<?php

// Defining the variables
$name = $_POST['naam'];
$mailaddress = $_POST['e-mail'];
$subject = $_POST['onderwerp'];
$text = $_POST['tekst'];

$to = "mxdev.nl@gmail.com";
$headers = "From: " . $mailaddress . " ";
$message = "Hallo mxDev team, hier is een e-mail van: \n";
$message .= "Naam: " . $name . "\n";
$message .= "E-mail: " . $mailaddress . "\n";
$message .= "Onderwerp: " . $subject . "\n";
$message .= "Tekst: \n" . $text . "\n\n";
$message .= "Met vriendelijke groet, \n\n";
$message .= $name;
mail($to, $subject, $message, $headers) or die ('Error mailing');

header('Location: index.php?page=gelukt_mail');
exit();