<?php
	require_once '03-lib.php';

	$matriz = [
	[1, 2, 3, 4, 0],
	[2, 0, 0, 1,-1],
	[6, 1,-3, 0, 5],
	[5, 4, 3, 2, 1],
	[-1,0, 0, 0, 0],
	[10,1,-5, 0,-9]
	];


	$fila_ganadora = -1;
	$columna_ganadora = -1;

	$resultado = max_cero($matriz, $fila_ganadora, $columna_ganadora);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo</title>
</head>
<body>
<?php if ($resultado) : ?>
	Se han encontrado ceros<br />
	La columna ganadora es la <?=$columna_ganadora?> y la fila ganadora es la <?=$fila_ganadora?>
<?php else: ?>
	No se han encontrado ceros<br />
<?php endif; ?>
</body>
</html>