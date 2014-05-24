<?php
$usuarios = ['pedro' => 'Ped551', 'laura' => '_LaU_27_'];

if (array_key_exists($_COOKIE['usuario'], $usuarios)) {
	echo "Te recuerdo. Eres ".$_COOKIE['usuario'];
} elseif (array_key_exists('usuario', $_COOKIE)) {
	echo "No te recuerdo ".$_COOKIE['usuario'].". ¿Seguro que nos conocemos?";
} else {
	echo "No has iniciado sesión";
}