<?php
$im = @imagecreatefrompng("logo.png") or die("Error al cargar imagen");
imagefilter($im, IMG_FILTER_NEGATE);
imagefilter($im, IMG_FILTER_PIXELATE, 20);
header("Content-Type: image/png");
imagepng($im);
imagedestroy($im);