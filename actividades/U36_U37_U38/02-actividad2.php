<?php

$punto1 = [
	'x' => 1,
	'y' => 1
];

$punto2 = [
	'x' => 2,
	'y' => 50
];

function distancia($punto1, $punto2) {
	$cateto1 = $punto2['x'] - $punto1['x'];
	$cateto2 = $punto2['y'] - $punto1['y'];

	$distancia = sqrt($cateto1 * $cateto1 + $cateto2 * $cateto2);
	return $distancia;
}

echo distancia($punto1, $punto2);