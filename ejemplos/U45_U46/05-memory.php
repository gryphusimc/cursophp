<?php

$pf = fopen("php://memory", 'w+b');

fwrite($pf, "En un lugar de la Mancha...");

rewind($pf);
$i = 0;
while (!feof($pf)) {
	$i++;
	echo fread($pf, 1);
}

echo "\n$i\n";