<?php
$numeros = array(12, 10, -1, -25, 8);
foreach($numeros as $clave => $valor) {
	echo $clave . "*" . $valor . " = " . $clave * $valor . "\n";
}

// 0*12 = 0
// 1*10 = 10
// 2*-1 = -2
// 3*-25 = -75
// 4*8 = 32