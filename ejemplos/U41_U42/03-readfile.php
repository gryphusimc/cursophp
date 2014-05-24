<?php
$fichero = "prueba.txt";

if (file_exists($fichero) && is_readable($fichero)) {
	header("Content-Type: text/plain");

	// Muestra directamente el contenido de $fichero
	readfile($fichero);
}