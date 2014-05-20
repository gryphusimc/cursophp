<?php
$i = 10;
do {
	if ($i % 3) {
		continue;
	}
	echo $i." ";
} while(--$i);