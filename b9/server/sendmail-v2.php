<?php
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

if(isset($_POST['btnSend'])){
	$toEmail = $_POST['email'] ?? '';
	$toEmail = strip_tags($toEmail);

	$subject = $_POST['subject'] ?? '';
	$subject = strip_tags($subject);

	$content = $_POST['content'] ?? '';

	// validate data
	$chkEmail = filter_var($toEmail, FILTER_VALIDATE_EMAIL);
	if(!$chkEmail || empty($subject) || empty($content)){
		header('Location:../index.php?state=error');
	} else {
		try {
			// Server settings
	    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                  
	    $mail->isSMTP();                                           
	    $mail->Host       = 'smtp.googlemail.com ';
	    $mail->SMTPAuth   = true;     
	    $mail->Username   = 'testvmo908@gmail.com';
	    $mail->Password   = 'trieunt123';
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
	    $mail->Port       = 587;

	    //Recipients
	    $mail->setFrom('testvmo908@gmail.com', 'PHP2010_Sendmail');
	    $mail->addAddress($toEmail);

	    //Attachments
    	$mail->addAttachment('images/test.png');
    	$mail->addAttachment('images/test.png', 'test.png');

    	//Content
	    $mail->isHTML(true);
	    $mail->Subject = $subject;
	    $mail->Body    = $content;

	    if($mail->send()){
	    	header('Location:../index.php?state=ok');
	    } else {
	    	header('Location:../index.php?state=fail');
	    }
		} catch(Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
	}
}