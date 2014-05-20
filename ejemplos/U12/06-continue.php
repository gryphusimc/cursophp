<?php
$i = 0;
do {
	if ($i == 5) {
		continue;
	}
	echo $i." ";
} while(++$i <= 10);
// Muestra 0 1 2 3 4 6 7 8 9 10