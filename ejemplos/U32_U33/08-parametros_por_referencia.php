<?php
function repetir1($palabra) {
	$palabra .= $palabra;
	echo $palabra;
}

$saludo = "Hola";
echo repetir1($saludo); // Muestra "HolaHola";
echo $saludo; // ¿Qué muestra?
?>
<br />
<?php
function repetir2(&$palabra) { // Fíjate en el símbolo &
	$palabra .= $palabra;
	echo $palabra;
}

$saludo = "Hola";
echo repetir2($saludo); // Muestra "HolaHola"
echo $saludo; // Ahora sí, muestra "HolaHola"
?>