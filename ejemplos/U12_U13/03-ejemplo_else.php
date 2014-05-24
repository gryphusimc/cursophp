<?php
$edad = 21;
define('EDAD_VOTAR', 18); // Constante, no varía

if ($edad >= EDAD_VOTAR) {
	echo "Puedes votar\n";
} else {
	echo "Aún no puedes votar\n";
}