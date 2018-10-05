<?php

// Should the person be here?
if (!isset($_POST['submit_contact'])) {
    header('Location: ../page/index.php?page=contact');
}

// Defining the variables
    // From the Contact Form
    $name = htmlentities($_POST['naam']);
    $mailaddress = $_POST['e-mail'];
    $subject = $_POST['onderwerp'];
    $text = htmlentities($_POST['tekst']);

    // Subject (real one)
    $subject1 = 'Nieuw bericht vanuit het Contact Formulier: ' . $subject;

//Setting up PHPMailer
    // Including PHPMailerAutoload.php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../phpmailer/src/Exception.php';
    require '../phpmailer/src/PHPMailer.php';
    require '../phpmailer/src/SMTP.php';

    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'mxdev.nl@gmail.com';
        $mail->Password = 'E2+bCr+M$Z&Yp&E+';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        //Recipients
        $mail->setFrom("mxdev.nl@gmail.com", "mxDEV");
        $mail->addAddress('mxdev.nl@gmail.com', 'MxDev');
        $mail->addReplyTo($mailaddress, $name);


        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject1;
        $mail->Body    = "
        <h1>Hallo MxDev team!</h1>
        
        <p>Jullie hebben een nieuw mail ontvangen vanuit het Contact Formulier.</p>
        <p><b>Naam:</b> "  . $name . "</p>
        <p><b>E-mail:</b> " . $mailaddress . "</p>
        <p><b>Onderwerp:</b> " . $subject . "</p>
        <p><b>Bericht:</b>
        <p>" . $text . "</p>";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
        header('Location: ../page/index.php?page=gelukt_mail');
    } catch (Exception $e) {
        header('Location: ../page/index.php?page=contact&gelukt=error');
    }

?>