<?php

$nombre = $_POST["Nombre"];
$correo = $_POST["Correo"];
$telefono = $_POST["Telefono"];
$mensaje = $_POST["Mensaje"];

$body ="Nombre: ". $nombre. "<br>Correo: ". $correo."<br>Telefono: ". $telefono."<br>Mensaje: ". $mensaje;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                      // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'sebastianfont95@gmail.com';                 // SMTP username
    $mail->Password = 'alejandro28';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('sebastianfont95@gmail.com', $nombre);
    $mail->addAddress('sebastianfont95@gmail.com');     // Add a recipient

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'envio';
    $mail->Body = $body;
    $mail->CharSet ='UTF-8';

    $mail->send();
    echo '<script>
    alert("el mensaje se envio correctamente");
    windows.history.go(-1);
       </script> ';
} catch (Exception $e) {
    echo 'hubo un error al enviar el mensaje', $mail->ErrorInfo;
}