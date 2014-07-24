<?php
// Precio del producto
$precio = 1.27;

// Importe pagado
$pagado = 2;

// Cambio que hay que devolver
$cambio = $pagado - $precio;

// Monedas disponibles
$disponible = [
    200 => 3,
    100 => 1,
    50 => 4,
    20 => 3,
    10 => 1,
    5 => 3,
    2 => 2,
    1 => 4,
    '0.5' => 0,
    '0.2' => 3,
    '0.1' => 3,
    '0.05' => 2,
    '0.02' => 2,
    '0.01' => 1
];

// Almacenamos aquí las monedas que vamos a devolver
$monedas = [];

// En cada iteración obtenemos una moneda
do {
    // Aquí comprobamos qué moneda vamos a devolver
    // Comenzamos recorriéndolas todas
    foreach($disponible as $valor => $existencias) {
        // Nos detenemos en la primera moneda cuyo valor
        // sea menor que el importe que tenemos que devolver
        // siempre y cuando tengamos existencias de esa moneda
        if ($valor <= $cambio && $existencias >= 1) {
            break;
        }
    }
    // Aquí tendremos el último valor e importe. Hay dos opciones:
    // 1. Que hayamos encontrado la moneda que buscábamos
    // 2. Que no haya cambio suficiente
    // Lo discriminamos en función de la variable $existencias. Si
    // no las hay, detenemos la ejecución:
    if(!$existencias) {
        die("No hay disponible cambio para el importe solicitado");
    }

    // Si hay existencias, actualizamos el stock de $disponible:
    $disponible[$valor]--;
    // Actualizamos la lista de monedas que vamos a devolver:
    $monedas[$valor]++;
    // Actualizamos el cambio pendiente, con redondeo, para evitar
    // problemas de precisión en coma flotante, ver advertencia:
    // http://php.net/manual/es/language.types.float.php
    $cambio = round($cambio - $valor, 2);
} while ($cambio > 0);

print_r($monedas);