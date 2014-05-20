<?php
$orig = @imagecreatefrompng("logo.png") or die("Error al cargar imagen");
$dest = imagecreatetruecolor(100, 100);

imagecopy($dest, $orig, 0, 0, 0, 0, 100, 100);
header("Content-Type: image/png");
imagepng($dest);

imagedestroy($orig);
imagedestroy($dest);