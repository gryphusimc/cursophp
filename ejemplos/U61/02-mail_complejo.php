<?php
$to = "usuario@gmail.com";
$subject = '=?UTF-8?B?' . base64_encode("Registrado con éxito en mipagina.com") . '?=';
$message = "<html>
<head><title>Correo</title></head>
<body>
<h1>Bienvenido</h1>
<p>Ha registrado al usuario ${usuario} con éxito en el sistema.</p>
</body></html>";

$headers = 'From: hola@ejemplo.com' . "\r\n" .
           'Reply-To: hola@ejemplo.com' . "\r\n" .
           'MIME-Version: 1.0' . "\r\n";
           'Content-type: text/html; charset=utf-8' . "\r\n";

if (!mail($to, $subject, $message, $headers)) {
	echo "Error al enviar el correo";
}