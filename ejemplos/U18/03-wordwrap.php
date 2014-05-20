<?php
	$texto = "El veloz murciélago hindú comía feliz cardillo y kiwi";
	$nuevotexto = wordwrap($texto, 20, "<br />\n");

	echo $nuevotexto;
?>