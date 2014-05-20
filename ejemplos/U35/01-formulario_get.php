<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if (empty($_GET['nombre'])): ?>
	<form method="get">
	    <div>
	        <input type="text" name="nombre" placeholder="Introduce tu nombre" />
	        <br />
	        <button>Enviar</button>
	    </div>
	</form>
	<?php else: ?>
	Bienvenido, <?=$_GET['nombre']?>
	<?php endif; ?>
</body>
</html>