<?php

$edad = 25;

date_default_timezone_set("Europe/Madrid");

$usuarios = array(
	1 => array('nombre' => 'Juan', 'nacimiento' => '07/05/1990'),
	2 => array('nombre' => 'Laura', 'nacimiento' => '16/12/1993'),
	3 => array('nombre' => 'Daniel', 'nacimiento' => '22/09/1970'),
	4 => array('nombre' => 'Hugo', 'nacimiento' => '01/09/1982'),
	5 => array('nombre' => 'Elisa', 'nacimiento' => '27/02/1974'),
);

$today = time();

$today_day 		= date('j', $today);
$today_month	= date('n', $today);
$today_year		= date('Y', $today);

foreach ($usuarios as $key => $usuario) {
	list($user_day, $user_month, $user_year) = explode("/", $usuario['nacimiento']);

	if(($today_year - $user_year) > $edad) {
		echo $usuario['nombre']." tiene más de $edad años<br />";
	} elseif(($today_year - $user_year) == $edad) {
		if ($today_month > $user_month) {
			echo $usuario['nombre']." tiene más de $edad años<br />";
		} elseif ($today_month == $user_month && $today_day >= $user_day) {
			echo $usuario['nombre']." tiene más de $edad años<br />";
		}
	}
}