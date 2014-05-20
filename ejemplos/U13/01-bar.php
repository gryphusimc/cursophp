<?php
include '01-foo.php'; // muestra 'hola '
require '01-foo.php'; // muestra 'hola '
include '01-bee.php'; // muestra una alerta (warning), porque no existe
require '01-bee.php'; // muestra un error fatal, porque no existe, y se detiene
echo 'fin'; // este código no llega a ejecutarse