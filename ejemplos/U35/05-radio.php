<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if (empty($_POST['sexo'])): ?>
	<form method="post">
	    <div>
	    	<input type="radio" name="sexo" value="M" id="sexo_M" />
	    	<label for="sexo_M">Masculino</label><br />
	    	<input type="radio" name="sexo" value="F" id="sexo_F" />
	    	<label for="sexo_F">Femenino</label><br />
	        <br />
	        <button>Enviar</button>
	    </div>
	</form>
	<?php else: ?>
	Tu sexo es: <?=$_POST['sexo']?>
	<?php endif; ?>
</body>
</html>