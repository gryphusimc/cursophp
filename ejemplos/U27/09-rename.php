<?php
$origen = dirname(__FILE__).'/copia.php'; // Fichero que vamos a mover
$destino = dirname(__FILE__)."/nueva_copia.php"; // Nuevo nombre

if (is_writable($origen) && is_writable(dirname($destino))) {
	rename($origen, $destino);
	echo "Movido con éxito\n";
} else {
	echo "No se puede mover\n";
}