<?php
$ruta = '/'; // En Windows, pon 'C:/'
if (is_writable($ruta)) {
	echo "Sí tenemos permisos de escritura\n";
} else {
	echo "No tenemos permisos de escritura\n";
}