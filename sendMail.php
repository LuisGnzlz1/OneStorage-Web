<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$nombre  = $_POST['nombre'];
$correo  = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$correo_destino = 'info@onestorage.com.ar';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.ipage.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'web@onestorage.com.ar';        // SMTP username
    $mail->Password = 'Passw0rd';                       // SMTP password
    //$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 25;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('web@onestorage.com.ar', 'Onestorage');
    $mail->addAddress($correo_destino);

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Contacto';
    $mail->Body    = 'Una persona desea contactarte, <br><br><b>Nombre:</b> '.$nombre.' <br><b>Correo:</b> '.$correo.' <br> <b>Mensaje:</b> '.$mensaje.'';

    if($mail->send()){
        echo json_encode(['code' => 200]);
    }else{
        echo json_encode(['code' => 500]);
    }


} catch (Exception $e) {

    echo json_encode(['code' => 500, 'msj' => $mail->ErrorInfo]);

}

?>