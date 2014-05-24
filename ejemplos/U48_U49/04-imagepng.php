<?php
$im = @imagecreatefromgif("logo.gif");
imagepng($im, "logo.png");
imagedestroy($im);