<?php
$usuarios = ['pedro' => 'Ped551', 'laura' => '_LaU_27_'];

if (array_key_exists('usuario', $_COOKIE)) {
    list($usuario, $clave) = explode(":", $_COOKIE['usuario']);

    if (array_key_exists($usuario, $usuarios)) {
        if (md5($usuario.$usuarios[$usuario]) == $clave) {
            echo "Te recuerdo. Eres ".$usuario;
        } else {
            // Mostramos nuevo mensaje:
            echo "Clave incorrecta";
        }
    } else {
        echo "No te recuerdo $usuario. ¿Seguro que nos conocemos?";
    }
} else {
    echo "No has iniciado sesión";
}