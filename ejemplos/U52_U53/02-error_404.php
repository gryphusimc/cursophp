<?php
// En $registrados tenemos todos los usuarios registrados
$registrados = array('juanlu', 'debian', 'anita', 'superyo');

// En $usuario está el que se desea consultar:
if (!in_array($usuario, $registrados)) {
	header("HTTP/1.0 404 Not Found");
	die ("<h1>Error 404: No existe el usuario $usuario</h1>");
}
echo "<h1>Ficha de $usuario</h1>";