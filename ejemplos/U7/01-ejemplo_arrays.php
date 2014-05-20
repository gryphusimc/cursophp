<?php

$variable1 = array(
	'clave1' => 'valor1',
	'clave2' => 'valor2',
);

// Los dos siguientes arrays son iguales:
$variable2 = array('valor1', 'valor2');
$variable3 = array(
	0 => 'valor1',
	1 => 'valor2',
);

// Y desde PHP 5.4 también se puede hacer así:
$variables4 = ['valor1', 'valor2'];