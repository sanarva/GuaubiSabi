<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "info@guaubisabi.com, $correo";
$asunto = "Contacto desde web Guaubi Sabi";

$carta = "Hola $nombre, \n \n";
$carta .= "Este mensaje es para confirmarte que hemos recibido tu consulta:\n";
$carta .= "     Asunto: $telefono\n";
$carta .= "     Mensaje: $mensaje\n \n";
$carta .= "Te contestaremos lo antes posible. Pero si tienes prisa, envianos un WhatsApp al 644 057 800\n \n";
$carta .= "Saludos peludos\n \n";


// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje-de-envio.html');

?>