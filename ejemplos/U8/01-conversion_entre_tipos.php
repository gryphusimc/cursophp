<?php
$edad_string = "25"; // Es de tipo string (está entre comillas)
$edad_int = (integer) $edad_string; // $edad_int vale 25 (integer).

$pi = 3.14; // De tipo float
$pi_redondeado = (integer) $pi; // Vale 3, de float a integer

$es_siglo_21 = TRUE; // Vale TRUE, luego es boolean
$es_siglo_21_string = (string) $es_siglo_21; // ¡Se convierte a "1"!

$pelicula = "12 monos"; // De tipo string
$pelicula_integer = (int) $pelicula; // 12

$frase = "Tengo 105"; // De tipo string
$frase_integer = (int) $frase; // 0