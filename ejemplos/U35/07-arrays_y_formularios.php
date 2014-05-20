<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if (empty($_POST['usr']['nombre'])): ?>
	<form method="post">
	    <div>
	        <input type="text" name="usr[nombre]" placeholder="Tu nombre" />
	        <input type="text" name="usr[apellidos]" placeholder="Tus apellidos" />
	        <br />
	        <button>Enviar</button>
	    </div>
	</form>
	<?php else: ?>
	Bienvenido, <?=$_POST['usr']['nombre']?> <?=$_POST['usr']['apellidos']?>
	<?php endif; ?>
</body>
</html>