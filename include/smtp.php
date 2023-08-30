<?php

use PHPMailer\PHPMailer\PHPMailer;

// MESSAGE & EMAIL CONFIGURATION FOR SCRIPT
class message{
    private $conn;
    public function send_mail($email, $message, $subject){

        $mail = new PHPMailer();
        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "mail.guarantyunion.com"; // Change Email Host
        $mail->SMTPAuth = true;
        $mail->Username = "contact@guarantyunion.com"; // Change Email Address
        $mail->Password = '+Guarantyunion123'; // Change Email Password
        $mail->Port = 465; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom('contact@guarantyunion.com','Guaranty Union PLC'); // Change
        $mail->addAddress($email);
        $mail->AddReplyTo("contact@guarantyunion.com", "Guaranty Union PLC"); // Change
        $mail->Subject = $subject;
        $mail->MsgHTML($message);
        $mail->Send();


    }

}


?>