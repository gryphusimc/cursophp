<?php
$size = 1024 * 1024; // 1MB
$pf = fopen("php://temp/maxmemory:$size", 'r+');

fwrite($pf, "En un lugar de la Mancha...");

rewind($pf);
while (!feof($pf)) {
	echo fgetc($pf)." ";
}
echo "\n";