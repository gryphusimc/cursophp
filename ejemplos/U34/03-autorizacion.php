<?php
if ($usuario === "pepe") {
	header("Content-type: image/png");
	readfile('imagen-secreta.png');
	exit;
} else {
	header("HTTP/1.0 401 Unauthorized");
	die ("<h1>Error 401: No tienes autorización</h1>");
}