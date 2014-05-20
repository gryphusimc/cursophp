<?php
// Opción 1
echo 2*2*2*2*2*2*2*2; // Poco práctico

// Opción 2
$num = 1;
for ($i=0; $i< 8; $i++) {
	$num *= 2;
}
echo $num; // Muy engorroso

// Opción 3
echo pow(2, 8);

// Desde PHP 5.6:
echo 2**8;