<?php
/*$color = "red"; // Ponemos el nombre de un color en inglés

if ($color == "red") {
	echo "Rojo\n";
} elseif ($color == "green") {
	echo "Verde\n";
} elseif ($color == "white") {
	echo "Blanco\n";
} else {
	echo "No conozco ese color\n";
}

$color = "red"; // Ponemos el nombre de un color en inglés*/

// El código anterior es equivalente a este:

switch ($color) {
	case "red":
		echo "Rojo\n";
		// break sirve para salir del switch.
		// Si no lo pusiéramos, seguiría y escribiría "Verde"
		break;
	case "green":
		echo "Verde\n";
		break;
	case "white":
		echo "Blanco\n";
		break;
	default:
		echo "No conozco ese color\n";
}