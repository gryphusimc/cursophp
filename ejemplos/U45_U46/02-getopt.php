<?php
// Llama a este fichero desde la consola:
// $ php fichero.php -abj -f1 -v=2 --opcional --obligatorio
$corto = "abcf:v::";
$largo  = ["obligatorio:", "opcional::", "opcion1", "opcion2"];
$opciones = getopt($corto, $largo);
print_r($opciones);