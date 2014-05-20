<?php
$archivo_para_eliminar = dirname(__FILE__).'/nueva_copia.php'; // Copia del fichero
if (unlink($archivo_para_eliminar)) {
	echo "Se ha eliminado con éxito\n";
} else {
	echo "No se ha podido eliminar\n";
}