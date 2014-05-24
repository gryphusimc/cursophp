<?php
function suma_variable($num1) {
	$total = 0;
	foreach(func_get_args() as $num) {
		$total += $num;
	}

	return $total;
}

$resultado1 = suma_variable(303);              // Devuelve 303
$resultado2 = suma_variable(303, 1, -4, 1000); // Devuelve 1303