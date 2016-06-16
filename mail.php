<?php
require('./PHPMailer/PHPMailerAutoload.php');

$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               

$mail->isSMTP();                                      
$mail->Host = 'smtp.gmail.com'; 
$mail->SMTPAuth = true;                               
$mail->Username = 'elsie9685@gmail.com';                 
$mail->Password = '700uw9er';                          
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465;                                    

$mail->From('elsie9685@gmail.com');
$mail->FromName = 'A1033307';   
$mail->addAddress('php@nuk.im');
$mail->isHTML(true);                                  

$mail->Subject = 'php期末報到 A1033307';
$mail->Body    = 'A1033307 ip address:140.127.233.72  mac address=24-0A-64-6C-C3-74';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
 ?>