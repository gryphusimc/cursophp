<?php
// Abrimos el fichero
$nombreimagen = "logo.gif";
$im = @imagecreatefromgif($nombreimagen);

// Trabajamos con la imagen
// Finalmente la borramos
imagedestroy($im);