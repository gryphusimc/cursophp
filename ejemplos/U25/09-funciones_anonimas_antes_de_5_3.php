<?php
function duplicar($variable) { // Ahora es una función convencional
	return $variable * 2;
} // Fíjate que ahora, al ser una función, no tiene ';'

$nombre_funcion = "duplicar";
echo $nombre_funcion(10); // Muestra 20

function modificar_array($el_array, $la_funcion) {
	$nuevo_array = [];
	foreach($el_array as $elemento) {
		$nuevo_array[] = $la_funcion($elemento);
	}
	return $nuevo_array;
}

$otro_array = modificar_array(range(1,5), "duplicar");