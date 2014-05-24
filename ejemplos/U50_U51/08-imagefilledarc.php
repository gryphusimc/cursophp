<?php
// Por defecto tiene negro de color de fondo:
$imagen = imagecreatetruecolor(500, 350);

// Creamos un color amarillo
$color = imagecolorallocate($imagen, 0xFF, 0xFF, 0x00);

// Arcos:
imagettftext($imagen, 12, 0, 50, 45, $color, "arial.ttf", "IMG_ARC_PIE");
imagefilledarc($imagen, 100, 100, 180, 90, 50, 340, $color, IMG_ARC_PIE);

imagettftext($imagen, 12, 0, 350, 45, $color, "arial.ttf", "IMG_ARC_CHORD");
imagefilledarc($imagen, 400, 100, 180, 90, 50, 340, $color, IMG_ARC_CHORD);

imagettftext($imagen, 12, 0, 50, 190, $color, "arial.ttf", "IMG_ARC_NOFILL");
imagefilledarc($imagen, 100, 250, 180, 90, 50, 340, $color, IMG_ARC_NOFILL);

imagettftext($imagen, 12, 0, 250, 190, $color, "arial.ttf", "IMG_ARC_PIE|IMG_ARC_EDGED");
imagefilledarc($imagen, 400, 250, 180, 90, 50, 340, $color, IMG_ARC_NOFILL|IMG_ARC_EDGED);

// Mostramos y destruimos la imagen:
header("Content-Type: image/png");
imagepng($imagen);
imagedestroy($imagen);