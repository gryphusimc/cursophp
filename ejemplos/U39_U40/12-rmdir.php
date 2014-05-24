<?php
$carpeta = dirname(__FILE__)."/prueba";

if (rmdir($carpeta)) {
	echo "Carpeta borrada con éxito\n";
} else {
	echo "No se ha podido borrar la carpeta\n";
}