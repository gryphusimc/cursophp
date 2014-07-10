<?php
	$precio = 1.27;
	$pagado = 2;

	$disponible = [500,200,100,50,20,10,5,2,1,0.5,0.2,0.1,0.05,0.02,0.01];

	$cambio = $pagado - $precio;

	$i = 0;

	do {
		while ($disponible[$i] > $cambio) {
			$i++;
		}

		echo $disponible[$i].PHP_EOL;
		$cambio = round($cambio - $disponible[$i], 2);
	} while ($cambio > 0);