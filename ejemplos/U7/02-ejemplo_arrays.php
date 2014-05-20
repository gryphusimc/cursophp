<?php

// Poco práctico:
$poblacion_nueva_york = 8336697;
$poblacion_paris = 2243833;
$poblacion_tokio = 13157428;
$poblacion_sidney = 4627345;
$poblacion_buenos_aires = 2890151;

// Mejor así:
$poblacion = array(
	'nueva_york' => 8336697,
	'paris' => 2243833,
	'tokio' => 13157428,
	'sidney' => 4627345,
	'buenos_aires' = >2890151
);

// Leemos un dato:
echo $poblacion['nueva_york']; // Muestra 8336697

// Añadimos un dato:
$poblacion['los_angeles'] = 3792621; // Añadimos un nuevo valor al array

// Modificamos un dato:
$poblacion['paris'] = 2351495; // Modificamos un valor del array