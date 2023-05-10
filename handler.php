<?php
session_start();

require_once "vendor/autoload.php"; //PHPMailer Object 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
$mail = new PHPMailer(true);



// Server settings
$mail->SMTPDebug = 0;                      // Enable verbose debug output
$mail->isSMTP();                                            // Send using SMTP
$mail->Host       = 'mail.fameeri.greenriverdev.com';                    // Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
$mail->Username   = 'communityautomaintenance@fameeri.greenriverdev.com';                     // SMTP username
$mail->Password   = '?+%%[PC[iQr[';                               // SMTP password
$mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
$mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

$mailTo = "fauzia.ameeri@gmail.com";


if(isset($_POST['send-email'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$msg = $_POST['msg'];


	$mail->From = "communityautomaintenance@fameeri.greenriverdev.com";
	$mail->FromName = "Community Auto Maintenance"; //To address and name 
	$mail->addAddress($mailTo); //Address to which recipient will reply 


	$mail->isHTML(true); 
	$mail->Subject = $name . " Sent you a message using contact us form"; 
	$mail->Body = "<strong>Name</strong><br><i>$name</i> <br> <strong>Email</strong><br><i>$email</i> <br> <strong>Phone</strong><br><i>$phone</i> <br> <br> <strong>Message</strong>  <br><i>$msg</i>";
	$mail->AltBody = "Name\n$name \nEmail\n$email \nPhone \n$phone \n\nMessage\n$msg"; 
	if(!$mail->send()) 
	{
	echo "Mailer Error: " . $mail->ErrorInfo; 
	} 
	else { 
		//echo "Message has been sent successfully";
		header("Location: success.php");
		die();
	}
	
}




?>