<?php
// Abrimos el recurso (creamos la imagen):
$imagen = @imagecreatetruecolor(800, 600) or die ("Error al crear imagen");

// Trabajamos con ella (la mostramos o guardamos)

// Cerramos recurso (destruimos imagen):
imagedestroy($imagen);