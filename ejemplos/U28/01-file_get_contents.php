<?php
$fichero = "prueba.txt";

if (file_exists($fichero) && is_readable($fichero)) {
	// Guardamos en $texto el contenido del fichero
	$texto = file_get_contents($fichero);
	echo nl2br($texto);
}