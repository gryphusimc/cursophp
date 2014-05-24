<?php
$array1 = array("a", "b", "c");

// Podemos asignar los valores a variables, de uno en uno:
$item1 = $array[0];
$item2 = $array[1];
$item3 = $array[2];

// O todos de golpe
list($item1, $item2, $item3) = $array1;

echo $item3." - ".$item2." - ".$item1;
// Muestra "c - b - a"

list($day, $month, $year) = explode("/", "31/12/1991");
echo "Hoy es $day del $month de $year";
// Muestra "Hoy es 31 del 12 de 1991"