<?php
$array = range(0,10); // array(0,1,2,3,4,5,6,7,8,9,10)
$array = range(0,10,2); // array(0,2,4,6,8,10)
$array = range(10,0,-1); // array(10,9,8,7,6,5,4,3,2,1,0)

// for($i=0; $i<=500; $i++) {
foreach(range(0,500) as $i) {
	echo "Iteración $i\n";
}