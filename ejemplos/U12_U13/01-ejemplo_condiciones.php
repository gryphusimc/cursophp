<?php
$edad = 21;
define('EDAD_VOTAR', 18); // Constante, no varía

$es_mayor_de_edad = $edad >= EDAD_VOTAR; // TRUE

if ($es_mayor_de_edad) {
	echo "Puedes votar\n";
}