<?php
$uploaddir = dirname(__FILE__)."/";
$uploadfile = $uploaddir . basename($_FILES['fichero']['name']);

if (move_uploaded_file($_FILES['fichero']['tmp_name'], $uploadfile)) {
    echo "Fichero correcto y movido con éxito.\n";
} else {
    echo "¡Posible ataque!\n";
}

echo 'Información de depuración:';
echo "<pre>";
print_r($_FILES);
echo "</pre>";