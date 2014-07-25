<?php
// Precio del producto
$precio = 3.50;

// Importe pagado
$pagado = 7.50;

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
    2 => 1,
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

// Comprobamos si se ha pagado suficiente:
if ($cambio>=0) {
    // Recorremos todas las monedas/billetes existentes
    foreach ($disponible as $valor => $existencias) {
        // Si la moneda/billete consultada es menor o igual
        // que el importe pendiente de devolver, y tenemos
        // existencias de esa moneda billete:
        while ($cambio >= $valor && $disponible[$valor] !== 0) {
            // Actualizamos el stock de $disponible:
            $disponible[$valor]--;
            // Actualizamos la lista de monedas que vamos a devolver:
            $monedas[$valor]++;
            // Actualizamos el cambio pendiente, con redondeo, para evitar
        // problemas de precisión en coma flotante, ver advertencia:
        // http://php.net/manual/es/language.types.float.php
            $cambio = round($cambio - $valor, 2);
        }
    }
    // Si tras los pasos anteriores el cambio no es 0,
    // entonces es que no disponemos de cambio suficiente:
    if ($cambio !=0) {
        echo "Cambio no disponible";
    } else {
        print_r($monedas);
    }
} else {
    echo "Importe insuficiente";
}