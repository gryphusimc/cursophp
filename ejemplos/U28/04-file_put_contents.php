<?php
$fichero = "05-prueba.txt";
date_default_timezone_set("Europe/Madrid");

if (file_exists($fichero) && is_writeable($fichero)) {
	$linea = "Son las ".date("H:i:s")."\n";
	file_put_contents($fichero, $linea, FILE_APPEND);

	header("Content-Type: text/plain");

	// Muestra directamente el contenido de $fichero
	readfile($fichero);
}