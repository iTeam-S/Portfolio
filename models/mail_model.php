<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require './libs/PHPMailer/vendor/autoload.php';

    $mail = new PHPMailer(true);

    try {                
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com';   
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'v123erify_peer_name' => false,
            'allow_self_signed' => true));  

        $mail->SMTPAuth   = true;                                   
        $mail->Username   =  $mail_username;                     
        $mail->Password   = $mail_password;                              
        $mail->SMTPSecure = 'ssl';            
        $mail->Port       = 465;                                

        $mail->setFrom($client_email, $client_email.' - '.$client_name);
        $mail->addAddress($email);     
   
        $mail->isHTML(false);                                  
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->send();

    }catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }