<?php
$im = @imagecreatefrompng("logo.png") or die("Error al cargar imagen");

$ancho = imagesx($im);
$alto  = imagesy($im);

echo "La imagen tiene ${ancho}px de ancho y ${alto}px de alto\n";
imagedestroy($im);