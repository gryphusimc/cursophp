<?php
function ejemplo() {
	echo "Dentro de ejemplo";
}

$variable1 = "ejemplo";
$variable2 = "prueba";

$variable1(); // Muestra "Dentro de ejemplo"
$variable2(); // No existe prueba(). Lanza error.