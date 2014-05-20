<?php
// Por defecto tiene negro de color de fondo:
$imagen = imagecreatetruecolor(100, 100);

// Creamos un color blanco:
$color = imagecolorallocate($imagen, 0xFF, 0xFF, 0xFF);

// Mostramos y destruimos la imagen:
header("Content-Type: image/png");
imagepng($imagen);
imagedestroy($imagen);