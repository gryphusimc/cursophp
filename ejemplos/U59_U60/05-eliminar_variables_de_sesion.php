<?php
session_start();

if (!isset($_SESSION['contador'])) {
	$_SESSION['contador'] = 1;	
} elseif ($_SESSION['contador'] == 10) {
	unset($_SESSION['contador']);
} else {
	$_SESSION['contador']++;
}

echo "Has cargado esta página ".$_SESSION['contador']." veces";