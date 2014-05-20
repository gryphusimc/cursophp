<?php
$im = @imagecreatefrompng("logo.png") or die("Error al cargar imagen");
$nueva = imagerotate($im, 180, 0); // El 0 es el color negro.
header("Content-Type: image/png");
imagepng($nueva);
imagedestroy($im);
imagedestroy($nueva);