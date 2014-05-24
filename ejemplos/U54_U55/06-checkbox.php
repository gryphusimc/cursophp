<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if ($_SERVER['REQUEST_METHOD'] != "POST"): ?>
	<form method="post">
	    <div>
	    	<input type="checkbox" name="condiciones" value="1" id="condiciones" />
	    	<label for="condiciones">Acepto las condiciones de uso</label><br />
	    	<input type="checkbox" name="promociones" id="promociones" />
	    	<label for="promociones">Autorizo el envío de mails promocionales</label>
	        <br />
	        <button>Enviar</button>
	    </div>
	</form>
	<?php else: print_r($_POST); endif; ?>
</body>
</html>