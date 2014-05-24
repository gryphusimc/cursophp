<?php
$to = "usuario@gmail.com";
$subject = "Registrado con éxito en mipagina.com";
$message = "¡Bienvenido!\r\n\r\n";
$message .= "Has registrado con éxito al usuario ${usuario}";
$headers = "From: hola@mipagina.com\r\n";

mail($to, $subject, $message, $headers);