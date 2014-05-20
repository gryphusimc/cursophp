<?php

// Desde PHP 5.6:
function suma_variable(...$nums) {
	$total = 0;
	foreach($nums as $num) {
		$total += $num;
	}

	return $total;
}

$resultado1 = suma_variable(303);              // Devuelve 303
$resultado2 = suma_variable(303, 1, -4, 1000); // Devuelve 1300