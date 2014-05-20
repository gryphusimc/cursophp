<?php if ($_SERVER['REQUEST_METHOD'] != 'POST'): ?>
<form method="post" action="index.php">
    <div>
        <input type="text"     name="nombre" placeholder="Introduce tu nombre" />
        <input type="password" name="pass" placeholder="Introduce tu password" />
        <br />
        <button>Enviar</button>
    </div>
</form>
<?php else:
    $usuarios = ['pedro' => 'Ped551', 'laura' => '_LaU_27_'];
    if (!empty($_POST['nombre']) && $usuarios[$_POST['nombre']] == $_POST['pass']) {
        setcookie('usuario', $_POST['nombre']);
        echo "¡Bienvenido/a!";
    } else {
        echo "Nombre o contraseña incorrectos.";
    }
endif; ?>