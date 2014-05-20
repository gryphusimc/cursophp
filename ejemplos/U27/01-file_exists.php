<?php
$ruta = "/"; // En Windows, pon "C:/";
if (file_exists($ruta)) {
	echo "Existe\n";
} else {
	echo "No existe\n";
}