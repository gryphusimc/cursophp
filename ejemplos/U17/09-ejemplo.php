<?php
$str = "La niña era muy lista pero muy maleducada. Se llamaba Laura.\n ";
$pos = strpos($str, 'l');
$substr = substr($str, $pos);
$minusculas = strtolower($substr);
$fin = rtrim($minusculas);
echo $fin;

// Resumido:
echo rtrim(strtolower(substr($str,strpos($str, 'l'))));