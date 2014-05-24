<?php
function incrementar_contador() {
	static $contador = 1;
	echo $contador;
	$contador++;
}

incrementar_contador(); // ¿Qué muestra?
incrementar_contador(); // ¿Y ahora?