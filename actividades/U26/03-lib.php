<?php
function max_cero($matriz, &$max_fila = null, &max_columna = null) {
	$total_fila = 0; // Total de la fila con más ceros
	$total_columna = 0; // Total de la columna con más ceros

	$cero_encontrado = false;

	foreach ($matriz as $i => $fila) {
		$contador = 0;
		foreach ($fila as $elemento) {
			if ($elemento === 0) {
				$cero_encontrado = true;
				$contador++;
			}
		}

		if ($contador > $total_fila) {
			$max_fila = $i;
			$total_fila = $contador;
		}
	}

	$columnas = count($matriz[0]);
	for($i=0; $i<$columnas; $i++) {
		$contador = 0;
		for ($j=0; $j<count($matriz); $j++) {
			if ($matriz[$j][$i] === 0) {
				$cero_encontrado = true;
				$contador++;
			}
		}

		if ($contador > $total_columna) {
			$max_columna = $i;
			$total_columna = $contador;
		}
	}
}