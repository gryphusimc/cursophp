<?php
$ruta = '/'; // En Windows, pon 'C:/'
if (is_dir($ruta)) {
	echo "Es un directorio\n";
} else {
	echo "No es un directorio\n";
}