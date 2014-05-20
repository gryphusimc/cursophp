<?php
$origen = __FILE__; // Fichero que vamos a copiar
$destino = dirname(__FILE__)."/copia.php"; // Copia del fichero

if (is_readable($origen) && is_writable(dirname($destino))) {
	copy($origen, $destino);
	echo "Copiado con éxito\n";
} else {
	echo "No se puede copiar\n";
}