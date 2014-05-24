<?php
$str = "En un lugar de la Mancha";
// Opción 1: Carácter a carácter
$str1 = $str[10].$str[11].$str[12].$str[13].$str[14]; // ¿Y si fueran 100?

// Opción 2: Un bucle
$str2 = "";
for ($i=10; $i<=14; $i++) {
	$str2 .= $str[$i];
}

// Opción 3: substr:
$str3 = substr($str, 10, 5);