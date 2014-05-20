<?php
$fichero = "prueba.txt";

if (file_exists($fichero) && is_readable($fichero)) {
	// Guardamos el contenido del fichero en el array $texto_array
	$texto_array = file($fichero);

	foreach($texto_array as $linea) {
		echo $linea."<br>";
	}
}