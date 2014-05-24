<?php

	$variable_array = array();

	echo "<h2>Múltiplos de 9 y 13 de los 1000 primeros números</h2>";
	for ($i=0; $i<1000; $i++) {
		if ($i % 9 === 0 || $i % 13 === 0) {
			echo $i." ";
			$variable_array[] = $i;
		}
	}

	echo "<h3>Del array</h3>";
	foreach($variable_array as $num) {
		echo $num." ";
	}