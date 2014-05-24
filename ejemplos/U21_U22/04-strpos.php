<?php
$str = "En un lugar de la Mancha...";
strpos($str, "En"); // Devuelve un (int) 0
strpos($str, "Walter"); // Devuelve un (bool) FALSE
strpos($str, "Mancha"); // Devuelve un 18
strpos($str, "l", 10); // Devuelve un 15 (segunda 'l');

if (strpos($str, "X") !== FALSE) {
	echo "¡Encontrado!";
} else {
	echo "No encontrado :(";
}