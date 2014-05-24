<DOCTYPE html>
<html>
<head>
	<title>Ejemplo</title>
</head>
<body>
<?php $edad = 21; if ($edad >= 18): ?>
	<p>Para votar pulsa <a href='/votar.php'>aquí</a><p>
<?php else: ?>
	<p>Aún no puedes votar<p>
<?php endif; ?>
</body>
</html>