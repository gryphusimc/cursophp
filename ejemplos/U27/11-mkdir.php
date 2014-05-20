<?php
$carpeta = dirname(__FILE__)."/prueba";

if (is_writable(dirname($carpeta))) {
	mkdir($carpeta);
	echo "Carpeta creada con éxito\n";
} else {
	echo "No se ha podido crear la carpeta\n";
}