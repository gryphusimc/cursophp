<?php
$modos = 'waw';
$nombre = 'fichero.txt';

for ($i = 0; $i< strlen($modos); $i++) {
	$pf = fopen('fichero.txt', $modos[$i]);
	fwrite($pf, '1');
	fwrite($pf, '23');
	fclose($pf);

	readfile($nombre);
	echo "<br />";
}