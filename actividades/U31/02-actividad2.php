<?php
	$fichero = "02-fichero_largo.txt";

	$pf = fopen($fichero, 'r');

	$contador = 1;
	do {
		for ($i=0; $i<10 && !feof($pf); $i++) {
			echo $contador++." # ".fgets($pf);
		}
	} while (!feof($pf));

	fclose($pf);