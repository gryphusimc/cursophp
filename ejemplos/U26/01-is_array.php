<?php
$var1 = array(1,2,3,5,7,11,13,17);
$var2 = "¿Array de letras?"; // echo $var2[1]; muestra 'A'
$var3 = array('uno' => 1, 'dos' => 2, 'tres' => 3);

is_array($var1); // TRUE
is_array($var2); // FALSE
is_array($var3); // TRUE