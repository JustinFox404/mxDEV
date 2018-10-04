<?php

// Should the person be here?
if (!isset($_POST['submit_contact'])) {
    header('Location: ../../page/index.php?page=contact');
}

// Defining the variables
    // From the Contact Form
    $name = htmlentities($_POST['naam']);
    $mailaddress = $_POST['e-mail'];
    $subject = $_POST['onderwerp'];
    $text = htmlentities($_POST['tekst']);

    // To the receiver
    $to = "mxdev.nl@gmail.com";

    // Headers
    $headers = 'From: ' . $mailaddress . "\r\n";
    $headers .= 'Reply-To: ' . $mailaddress . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Subject (real one)
    $subject1 = 'Nieuw bericht vanuit het Contact Formulier: ' . $subject;

    // Message
    $message = "
    <h1>Hallo MxDev team!</h1> 
    
    <p>Jullie hebben een nieuw mail ontvangen vanuit het Contact Formulier.</p>
    <p><b>Naam:</b> "  . $name . "</p>
    <p><b>E-mail:</b> " . $mailaddress . "</p>
    <p><b>Onderwerp:</b> " . $subject . "</p>
    <p><b>Bericht:</b>
    <p>" . $text . "</p>" or die('Error 6');

mail($to, $subject1, $message, $headers) or die ('Error mailing');

header('Location: ../page/index.php?page=gelukt_mail');
exit();