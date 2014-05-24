<?php
$im = imagecreatetruecolor(300, 100);
$color = imagecolorallocate($im, 0xFF, 0xFF, 0xFF);
imagesetthickness($im, 3);
imagerectangle($im, 4, 4, 295, 95, $color);
header("Content-Type: image/png");
imagepng($im);
imagedestroy($im);