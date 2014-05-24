<?php
$arr1 = array("L","M","X");
$arr2 = array("J","V","S","D");

$arr3 = array("Juan" => 18, "Luis" => 40, "Laura" => 29, "Ángela" => 21);
$arr4 = array("Felipe" => 33, "Laura" => 25, "Pedro" => 36);

$arr5 = array_merge($arr1, $arr2); // "L","M","X","J","V","S","D"
$arr6 = array_merge($arr3, $arr4);

echo $arr6["Laura"]; // Solo se guarda el último valor: 25