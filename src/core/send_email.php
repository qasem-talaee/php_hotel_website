<?php
include ('core/PHPmailer/PHPMailer.php');
include ('core/PHPmailer/SMTP.php');
use PHPMailer\PHPMailer\PHPMailer;
function send_email($to, $receiver_name, $subject, $message ,$from, $from_name, $reply_to, $replay_to_name){
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    //0 for not showing errors -- 3 for showing errors
    $mail->SMTPDebug = 0;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'Your gmail address';
    $mail->Password = 'Your gmail password';
    $mail->setFrom($from, $from_name);
    $mail->addReplyTo($reply_to, $replay_to_name);
    $mail->addAddress($to, $receiver_name);
// Content
// Set email format to HTML
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $message;
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'The email message was sent.';
    }
}
?>