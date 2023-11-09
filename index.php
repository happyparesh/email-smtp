<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$mail = new PHPMailer();
try {
    $mail->SMTPDebug = false;                                      
    $mail->isSMTP();  
    $mail->Host       = 'smtp.example.com';                   
    $mail->SMTPAuth   = true;                            
    $mail->Username   = 'example@gmail.com';                
    $mail->Password   = 'password';                       
    $mail->SMTPSecure = 'tls';                             
    $mail->Port       = 587; 
    $mail->setFrom('send@example.com','sendmail');          
    $mail->addAddress('youremail@example.com','hello');      
    $mail->isHTML(true);                                 
    $mail->Subject = 'Subject';
    $mail->Body    = 'HTML message body in <b>bold</b> ';
    $mail->AltBody = 'Body in plain text for non-HTML mail clients';
    if($mail->send())
    {
        echo "Mail has been sent successfully!";
    }else{
        echo "Error".$mail->ErrorInfo;
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
