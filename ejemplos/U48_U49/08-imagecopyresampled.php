<?php
$orig = @imagecreatefrompng("logo.png") or die("Error al cargar imagen");
$ancho = imagesx($orig);
$alto  = imagesy($orig);
$dest1 = imagecreatetruecolor($ancho, $alto);
$dest2 = imagecreatetruecolor(100, 100);
$dest3 = imagecreatetruecolor($ancho/2, $alto/2);

imagecopyresampled($dest1, $orig, 0, 0, 0, 0, $ancho, $alto, $ancho, $alto);
imagepng($dest1, "logo.1.png"); // Copiamos

imagecopyresampled($dest2, $orig, 0, 0, 0, 0, 100, 100, 100, 100);
imagepng($dest2, "logo.2.png"); // Recortamos como con imagecopy()

imagecopyresampled($dest3, $orig, 0, 0, 0, 0, $ancho/2, $alto/2, $ancho, $alto);
imagepng($dest3, "logo.3.png"); // Escalamos

imagedestroy($orig);
imagedestroy($dest1);
imagedestroy($dest2);
imagedestroy($dest3);