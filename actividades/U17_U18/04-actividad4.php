<?php

$n = 15;
$i = 0;

do {
	$i++;
	if ($i % 7 === 0) {
		echo $i." ";
		$n--;
	}
} while ($n > 0);