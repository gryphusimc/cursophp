<?php
// echo "Hola"; // Esto haría que no funcionara
$im = @imagecreatefrompng("logo.png") or die("Error al cargar imagen");

// Tampoco funcionaría si no llamáramos a header()
header("Content-Type: image/gif"); 
imagegif($im);
imagedestroy($im);