<?php
$size = 1024 * 1024;
$pf = fopen("prueba.bin", 'w');
fseek($pf, $size, SEEK_END);
fwrite($pf, 0);
fclose($pf);