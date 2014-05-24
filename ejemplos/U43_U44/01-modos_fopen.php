<?php
$fichero = fopen("ejemplo.txt", "w+"); // No es binario, es texto
$imagen = fopen("logo.gif", "rb"); // Una imagen es binario, luego ponemos 'b'
$url = fopen("http://www.php.net/", "rb"); // No es binario, pero ponemos 'b'