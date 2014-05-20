<?php
$var1 = array(1,2,3,5,7,11,13,17);
$var2 = "¿Array de letras?"; // echo $var2[1]; muestra 'A'
$var3 = array('uno' => 1, 'dos' => 2, 'tres' => 3);

echo count($var1); // Muestra 8
echo count($var2); // Muestra 1 (no es un array)
echo count($var3); // Muestra 3