<?php
// Operadores de arrays
$edades1 = array('Luis' => 27, 'Ángel' => 21);
$edades2 = array('Ángel' => 21, 'Luis' => 27);
$edades3 = array('Luis' => 27, 'Ángel' => '21');
$edades4 = array('María' => 22);

$edades1 == $edades2; // Igualdad: TRUE
$edades1 == $edades3; // Igualdad: TRUE
$edades1 === $edades2; // Idénticos: FALSE (distinto orden)
$edades1 === $edades3; // Idénticos: FALSE (distintos tipos)

$edades1 + $edades4; // Unión: array('Luis'=>27, 'Ángel'=>21, 'María'=>22)