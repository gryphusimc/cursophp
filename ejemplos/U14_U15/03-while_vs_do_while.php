<?php
// Bucle while, no se llega a ejecutar
$numero = 10;
while ($numero++ < 5) {
	echo $numero." ";
}

// Bucle do..while, sí se llega a ejecutar
$numero = 10;
do {
	echo $numero." ";
} while ($numero++ < 5);