<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer Autoload.php file
require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

// SMTP Configuration
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com'; // Specify your SMTP server
$mail->SMTPAuth = true;
$mail->Username = 'ochola4sunday@gmail.com'; // SMTP username
$mail->Password = 'rpevxrrzmxmvjiby'; // SMTP password
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Email Content
$mail->setFrom($_POST['email'], $_POST['name']);
$mail->addAddress('ochola4sunday@gmail.com'); // Recipient email address
$mail->Subject = $_POST['subject'];
$mail->Body = $_POST['message'];

// Send email
if ($mail->send()) {
    echo 'Message has been sent';
} else {
    echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
}
?>

