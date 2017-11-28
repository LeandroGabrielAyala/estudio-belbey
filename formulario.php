<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$comentario = $_POST['comentario'];


$message .= 'Nombre: '.$nombre.'<br /><br />';
$message .= 'Email: '.$email.'<br /><br />';
$message .= 'Telefono: '.$telefono.'<br /><br />';
$message .= 'Comentario: '.$comentario.'<br /><br />';


require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mailRe = new PHPMailer;


//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->setFrom('horaciobelbey@hotmail.com', 'Estudio Belbey');
$mail->addAddress('horaciobelbey@hotmail.com', 'Cosultas desde EstudioBelbey.com.ar'); // Add a recipient
$mail->addReplyTo('horaciobelbey@hotmail.com', 'Información de Estudio Belbey');

$mailRe->setFrom('form.conosur@gmail.com', 'METZ - Convencional');
$mailRe->addAddress('form.conosur@gmail.com', 'Cosultas METZ Peugeot - Convencional'); // Add a recipient
$mailRe->addReplyTo('form.conosur@gmail.com', 'Información de METZ Convencional');


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Contacto desde EstudioBelbey.com.ar';
$mail->Body    = $message;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
$mail->send();

$mailRe->isHTML(true);                                  // Set email format to HTML

$mailRe->Subject = 'Contacto de Venta - Metz Convencional';
$mailRe->Body    = $message;
$mailRe->AltBody = 'This is the body in plain text for non-HTML mail clients';
$mailRe->send();

echo "exito";
