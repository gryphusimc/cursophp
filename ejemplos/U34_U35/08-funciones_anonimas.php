<?php
$duplicar = function($variable) { // No tiene nombre la función
	return $variable * 2;
}; // Fíjate que ahora, al ser una variable callable, ponemos ';'

echo $duplicar(10); // Muestra 20

function modificar_array($el_array, $la_funcion) {
	$nuevo_array = [];
	foreach($el_array as $elemento) {
		$nuevo_array[] = $la_funcion($elemento);
	}
	return $nuevo_array;
}

$otro_array1 = modificar_array(range(1,5), $duplicar);

$otro_array2 = modificar_array(range(1,5), function($variable) {
	return $variable * 10; }
);