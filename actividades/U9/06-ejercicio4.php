<DOCTYPE html>
<html>
<head>
	<title>Ejemplo</title>
</head>
<body>
	<?php
		// Información del navegador:
		echo $_SERVER['HTTP_USER_AGENT'];
	?>
	<br />
	<?php
		// IP de consulta:
		echo $_SERVER['REMOTE_ADDR'];
	?>
</body>
</html>