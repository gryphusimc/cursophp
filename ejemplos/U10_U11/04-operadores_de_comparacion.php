<?php
// Comparación
$a = 12;
$b = "12";
$c = 10;

$a == $b; // Comparación: TRUE
$a == $c; // Comparación: FALSE
$a === $b; // Idéntico: FALSE (distintos tipos)
$a != $b; // Diferente: FALSE
$a !== $b; // No idénticos: TRUE (distintos tipos)
$a != $c; // Diferente: TRUE
$a < $b; // Menor que: FALSE
$a <= $b; // Menor o igual que: TRUE (son iguales)
$a > $c; // Mayor que: TRUE
$a >= $c; // Mayor o igual que: TRUE