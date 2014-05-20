<?php
// Lógicos
$a = FALSE;
$b = 12;
$c = !$a; // Negación: !FALSE => TRUE
$c = !$b; // Negación: !12 => !TRUE => FALSE
$c = $a && $b; // Y: FALSE, pues $a no es TRUE
$c = $a || $b; // O: $b en boolean es TRUE (distinto de 0), luego TRUE
$c = !$a && $b; // Y: TRUE
$c = (!$a && $b) || !$b;
// 1. (!FALSE && 12) || !12 ### Sustituimos
// 2. (!FALSE && TRUE) || !TRUE ### Convertimos a bool
// 3. (TRUE && TRUE) || FALSE ### Negamos
// 4. TRUE || FALSE ### Descomponemos
// 5. TRUE ### Descomponemos