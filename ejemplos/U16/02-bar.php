<?php
include_once '02-foo.php'; // muestra 'hola '
require_once '02-foo.php'; // no muestra nada (ya había sido incluído antes)
include_once '02-bee.php'; // muestra una alerta (warning), porque no existe
require_once '02-bee.php'; // muestra un error fatal, porque no existe, y se detiene
echo 'fin'; // este código no llega a ejecutarse