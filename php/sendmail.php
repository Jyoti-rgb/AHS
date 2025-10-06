<?php
// Step 1: Include PHPMailer classes
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Step 2: Create PHPMailer object
$mail = new PHPMailer(true);

try {
    // Step 3: SMTP settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.hostinger.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'contact@bytework.in';  // User email
    $mail->Password   = 'abcdABCD@1231333#';   // Gmail App Password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Step 4: Set sender and reply-to
    $mail->setFrom('contact@bytework.in', 'Website Contact'); // Gmail as sender
    $mail->addReplyTo($_POST['email'], $_POST['name']);          

    // Step 5: Recipient
    $mail->addAddress('contact@bytework.in');  

    // Step 6: Email content
    $mail->isHTML(true);
    $mail->Subject = $_POST['subject'];
    $mail->Body    = "
        <strong>Name:</strong> {$_POST['name']}<br>
        <strong>Email:</strong> {$_POST['email']}<br>
        <strong>Phone:</strong> {$_POST['phone']}<br>
        <strong>Subject:</strong> {$_POST['subject']}<br>
        <strong>Message:</strong><br>" . nl2br($_POST['message']);

    // Step 7: Send mail
    $mail->send();
    echo 'Message sent successfully!';
} catch (Exception $e) {
    echo "Message could not be sent. Error: {$mail->ErrorInfo}";
}
?>
