<?php
// Por defecto tiene negro de color de fondo:
$imagen = imagecreatetruecolor(100, 30);

// Creamos un color blanco:
$color = imagecolorallocate($imagen, 0xFF, 0xFF, 0xFF);

// Añadimos un texto:
imagettftext($imagen, 12, 0, 10, 20, $color, "arial.ttf", "Probando...");

// Mostramos y destruimos la imagen:
header("Content-Type: image/png");
imagepng($imagen);
imagedestroy($imagen);