<?php
$ruta = '/'; // En Windows, pon 'C:/'
if (is_readable($ruta)) {
	echo "Sí tenemos permisos de lectura\n";
} else {
	echo "No tenemos permisos de lectura\n";
}