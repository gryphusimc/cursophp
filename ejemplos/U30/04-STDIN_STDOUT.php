<?php
fwrite(STDOUT, "Bienvenido a mi aplicación\nPor favor, introduce tu nombre: ");

$nombre = trim(fgets(STDIN));

if (strlen($nombre))
	echo "Hola $nombre :)\n";
else
	fwrite(STDERR, "Error: nombre vacío.\n");