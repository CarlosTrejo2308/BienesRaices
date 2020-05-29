<?php

include_once "../includes/PHPMailer/PHPMailerAutoload.php";

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'programmintesting@gmail.com';
$mail->Password = 'pruebapsw';

$mail->SetFrom('programmintesting@gmail.com');
$mail->Subject = "Hello World";
$mail->Body = 'A test email';
$mail->AddAddress('programmintesting@gmail.com');


$mail->Send();
echo "si";
 ?>
