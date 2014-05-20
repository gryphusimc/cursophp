<?php
$foo = "Valor";
$fooes = "Otro valor";

$str = "Este string contiene $fooes.";
$str1 = "Este string contiene ${foo}es.";
$str2 = "Este string contiene {$foo}es.";
$str3 = "Este string contiene ".$foo."es.";