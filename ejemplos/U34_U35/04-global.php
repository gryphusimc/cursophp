<?php
$edad = 21;

function mostrar_edad() {
	global $edad;
	echo $edad;
}

mostrar_edad();