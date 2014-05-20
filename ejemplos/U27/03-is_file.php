<?php
$ruta = '/'; // En Windows, pon 'C:/'
if (is_file($ruta)) {
	echo "Es un fichero\n";
} else {
	echo "No es un fichero\n";
}