<?php
$foo = "Valor";

$str = <<<ETIQUETA
Contenido del String $foo
ETIQUETA;

// Desde PHP 5.3
$str = <<<"ETIQUETA"
Contenido del String $foo
ETIQUETA;