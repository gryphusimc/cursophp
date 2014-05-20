<?php
$stdout = fopen("php://stdout", "w");
$stderr = fopen("php://stderr", "w");
$stdin = fopen("php://stdin", "r");

fwrite($stdout, "Bienvenido a mi aplicación\nPor favor, introduce tu nombre: ");

$nombre = trim(fgets($stdin));

if (strlen($nombre))
	echo "Hola $nombre :)\n";
else
	fwrite($stderr, "Error: nombre vacío.\n");