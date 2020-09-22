<?php
$destino = "mnegroni@untref.edu.ar";
$nombre = $_POST ["nombre"];
$mail = $_POST ["mail"];
$telefono = $_POST ["telefono"];
$mensaje = $_POST ["mensaje"];
$contenido = "Nombre: " . $nombre . " \nCorreo: " . $mail . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;

mail($destino, "Consulta enviada desde website", $contenido);

header("Location:contacto.html");
?> 