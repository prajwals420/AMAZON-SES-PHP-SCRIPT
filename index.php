<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
require 'vendor/autoload.php';






//Create a new PHPMailer instance
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging

$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'email-smtp.us-east-2.amazonaws.com'; //If you are using US East Ohio Region.

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
// I tried PORT 25, 465 too
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "XYZXYZXYZ";

//Password to use for SMTP authentication
$mail->Password = "XYZXYZXYZ";

//Set who the message is to be sent from
$mail->setFrom('XYZXYZXYZ@gmail.com', 'PRAJWALSUTAR');

//Set who the message is to be sent to
$mail->addAddress('XYZXYZXYZ@gmail.com', 'receiver');

//Set the subject line
$mail->Subject = 'Test Email';


$mail->Body = "Amazon SES Email Test";
//Replace the plain text body with one created manually
$mail->AltBody = "Email has been sent sucessfully.";

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
?>