<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if (empty($_POST['nombre'])): ?>
	<form method="post">
	    <div>
	        <input type="text" name="nombre" placeholder="Introduce tu nombre" />
	        <br />
	        <button>Enviar</button>
	    </div>
	</form>
	<?php else: ?>
	Bienvenido, <?=$_POST['nombre']?>
	<?php endif; ?>
</body>
</html>