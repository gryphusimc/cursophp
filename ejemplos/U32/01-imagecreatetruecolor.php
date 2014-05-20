<?php
// Creamos un recurso de imagen gd:
$imagen = imagecreatetruecolor(800, 600);
echo get_resource_type($imagen); // Muestra 'gd'

// También podemos crearlo así:
$imagen2 = @imagecreatetruecolor(800, 600) or die ("Error al crear imagen");