<?php
$im = imagecreatetruecolor(300, 100);

// Pintamos un fondo blanco
$bg = imagecolorallocate($im, 0xFF, 0xFF, 0xFF);
imagefilledrectangle($im, 0, 0, 300, 100, $bg);

// Pintamos el círculo
$fg = imagecolorallocate($im, 0, 0, 0);
imagefilledellipse($im, 150, 50, 40, 40, $fg);

header("Content-Type: image/png");
imagepng($im);
imagedestroy($im);