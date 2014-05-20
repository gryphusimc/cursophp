<?php
	$formato = "%d del %m del %Y";
	$fecha = "5 del 12 del 1990";

	list($day,,$month,,$year) = explode(" ", $fecha);

	echo $day."-".$month."-".$year;