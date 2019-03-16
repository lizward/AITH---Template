<?php
/**
 * This example shows making an SMTP connection with authentication.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require '../PHPMailer-5.2-stable/PHPMailer-5.2-stable/PHPMailerAutoload.php';

if($_POST) {
    (isset($_POST['myEmail'])) && empty($_POST['honeypot']);


    $myname = $_POST['myName'];
    $myemail = $_POST['myEmail'];
    $mypart = $_POST['myPart'];
    $myquestion = $_POST['myQuestion'];

//Create a new PHPMailer instance
    $mail = new PHPMailer(true);
//Tell PHPMailer to use SMTP
    $mail->isSMTP();
    $mail->isHTML(true);
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
    $mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';
//Set the hostname of the mail server
    $mail->Host = "mail.mothersprucefarm.com";
//Set the SMTP port number - likely to be 25, 465 or 587
    $mail->Port = 26;
//Whether to use SMTP authentication
    $mail->SMTPAuth = true;
//Username to use for SMTP authentication
    $mail->Username = "phpmailer@mothersprucefarm.com";
//Password to use for SMTP authentication
    $mail->Password = "cas225Password";
//Set who the message is to be sent from
    $mail->setFrom('phpmailer@mothersprucefarm.com', 'Liz Snell');
//Set an alternative reply-to address
    $mail->addReplyTo('phpmailer@mothersprucefarm.com', 'Liz Snell');


//Set who the message is to be sent to
    $mail->addAddress($myemail, @$myname);
//Set the subject line
    $mail->Subject = 'PHPMailer SMTP test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
    $mail->Body = 'Name:' . $_POST['myName'] . '<br>';
    $mail->Body .= 'Email:' . $_POST['myEmail'] . '<br>';
    $mail->Body .= 'Involvement:' . $_POST['myPart'] . '<br>';
    $mail->Body .= 'Question:' . $_POST['myQuestion'] . '<br>';
//send the message, check for errors

    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
        include 'contact.html.php';
        exit();
    }

    else {
        echo "Message sent!";
        include 'success.html.php';
        exit();
    }
}
include 'contact.html.php';