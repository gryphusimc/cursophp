<?php
// Por defecto tiene negro de color de fondo:
$imagen = imagecreatetruecolor(200, 30);

// Creamos un color blanco:
$color1 = imagecolorallocate($imagen, 0xFF, 0xFF, 0xFF);
// Creamos un color amarillo
$color2 = imagecolorallocate($imagen, 0xFF, 0x00, 0x00);

// Añadimos un texto:
imagettftext($imagen, 12, 0, 10, 20, $color1, "arial.ttf", "Probando...");
imagettftext($imagen, 20, 0, 10, 20, $color2, "arial.ttf", "Otra prueba");

// Mostramos y destruimos la imagen:
header("Content-Type: image/png");
imagepng($imagen);
imagedestroy($imagen);