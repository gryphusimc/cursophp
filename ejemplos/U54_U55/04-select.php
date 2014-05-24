<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if (empty($_POST['navegador'])): ?>
	<form method="post">
	    <div>
	        <select name="navegador" >
	        	<option value="">Seleccione su navegador favorito</option>
	        	<option value="chrome">Google Chrome</option>
	        	<option value="firefox">Mozilla Firefox</option>
	        	<option value="ie">Internet Explorer</option>
	        	<option value="safari">Safari</option>
	        </select>
	        <br />
	        <button>Enviar</button>
	    </div>
	</form>
	<?php else: ?>
	Has seleccionado <?=$_POST['navegador']?>
	<?php endif; ?>
</body>
</html>