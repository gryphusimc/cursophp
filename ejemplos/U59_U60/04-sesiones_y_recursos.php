<?php
session_start();

if (!isset($_SESSION['fichero'])) {
	echo "Creamos el fichero<br />";
	$_SESSION['fichero'] = fopen("borrame.txt", "w+");
} else {
	echo "El fichero se creó en una petición anterior a esta.<br />";
}

echo 'En $_SESSION[\'fichero\'] tenemos una variable de tipo ';
echo gettype($_SESSION['fichero']);