<?php
// leemos del wrapper http://
$contenido = file_get_contents("http://www.google.com");

// Escribimos sin indicar wrapper (por omisión, file://)
file_put_contents("google.html", $contenido);

// Leemos a partir del wrapper file://
$contenido1 = file_get_contents("file:///Users/chuso/hubiC/Ejemplos/google.html");

// Escribimos en ftp://
@file_put_contents("ftp://usuario:pass@host.com/google.html", $contenido1);

echo htmlentities(utf8_encode($contenido1));