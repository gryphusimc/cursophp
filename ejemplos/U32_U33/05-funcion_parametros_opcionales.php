<?php
function suma($num1, $num2, $num3 = 0) {
	return $num1 + $num2 + $num3;
}

$resultado1 = suma(303, 404);      // Devuelve 707
$resultado2 = suma(303, 404, 101); // Devuelve 808