<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$subject = $_POST['subject'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "info@guaubisabi.com, $correo";
$asunto = "Contacto desde web Guaubi Sabi";

$emailBody = "
<html>
<body>
  <p>Hola $nombre,</p>
  <p>Este mensaje es para confirmarte que hemos recibido tu consulta:</p>
  <p> · Asunto: $subject </p>
  <p> · Mensaje: $mensaje </p>
  <p>Te contestaremos lo antes posible. Pero si tienes prisa, envíanos un WhatsApp al 644 057 800</p>
  <p>Saludos peludos.</p>
  </body>
</html>
";

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

// Cabeceras adicionales
$headers .= 'From: Guaubi Sabi <info@guaubisabi.com>' . "\r\n";



// Enviando Mensaje
mail($destinatario, $asunto, $emailBody, $headers);
header('Location:mensaje-de-envio.html');

?>