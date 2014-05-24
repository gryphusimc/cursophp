<?php
	// Nombre del fichero donde se guarda lo que escribe el usuario:
	$fichero = "registro.txt";

	$argumentos = "f:s";
	$opciones = getopt($argumentos);

	if (array_key_exists('f', $opciones)) {
		$fichero = $opciones['f'];
	}

	if (array_key_exists('s', $opciones)) {

	} else {
		$pf = fopen($fichero, "w");

		do {
			fwrite(STDOUT, "Escribe una frase y pulsa INTRO: \n");
			$frase = trim(fgets(STDIN));

			// Solo escribimos la frase si no es "salir"
			if ($frase != "salir") {
				fwrite($pf, $frase."\n");
			}
		} while($frase != "salir");

		fclose($pf);
	}