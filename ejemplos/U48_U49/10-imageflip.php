<?php
$im = @imagecreatefrompng("logo.png") or die("Error al cargar imagen");
imageflip($im, IMG_FLIP_VERTICAL); // Volteo vertical
header("Content-Type: image/png");
imagepng($im);
imagedestroy($im);