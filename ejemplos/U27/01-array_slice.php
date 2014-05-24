<?php
$array1 = array(5,1,3,10,-2);
$array2 = array_slice($array1, 1, 2); // devuelve array(1,3)
$array3 = array_slice($array1, 0, 4); // devuelve array(5,1,3,10)