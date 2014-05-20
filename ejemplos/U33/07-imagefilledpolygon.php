<?php
$im = imagecreatetruecolor(300, 300);

$bg = imagecolorallocate($im, 230, 95, 0); // Pintamos el fondo
imagefilledrectangle($im, 0, 0, 300, 300, $bg);

// Pintamos una triángulo blanco
$coordenadas = [
	150, 50,
	50, 190,
	250, 190];
$fg = imagecolorallocate($im, 0x00, 0x00, 0xCC);
imagefilledpolygon($im, $coordenadas, 3, $fg);

header("Content-Type: image/png");
imagepng($im);
imagedestroy($im);