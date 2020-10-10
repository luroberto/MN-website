<?php
if (isset ($_POST ['enviar'])){
$destino = "mnegroni@untref.edu.ar";
$nombre = $_POST ["nombre"];
$mail = $_POST ["mail"];
$telefono = $_POST ["telefono"];
$mensaje = $_POST ["Mensaje"];
$header = "From: norelpy@example.com" . "r\n";
$header.= "Reply-To: noreply@example,com " . "r\n";
$header.= "X-Mailer: PHP/" . phpversion();
$contenido = "Nombre: " . $nombre . " \nCorreo: " . $mail . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;

$email = mail ($destino, "Consulta enviada desde website", $contenido);

}

