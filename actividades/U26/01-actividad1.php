<?php

function incrementar($numero) {
	return $numero + 1;
}

function potencia($base, $n) {
	$resultado = 1;
	for ($i=0; $i < $n, $i++) {
		$resultado *= $base;
	}

	return $resultado;
}

function factorial($numero) {
	$resultado = $numero;

	while ( $numero > 1 ) {
		$numero--;
		$resultado = $resultado * $numero;
	}

	return $resultado;
}

function comprobar_numero($numero = null) {
	if (is_numeric($numero)) {
		if (is_integer($numero)) {
			echo "Es un número entero";
		} elseif (is_float($numero)) {
			echo "Es un número real";
		}
	} else {
		echo "No es un número";
	}
}