<?php
$fecha = "13 de enero de 2015 a las 20:13";
$formato = "%d de %B de %Y a las %H:%M";
$fecha_a = strptime($fecha, $formato);
$timestamp = mktime($fecha_a['tm_hour'],
                    $fecha_a['tm_min'],
                    $fecha_a['tm_sec'],
                    $fecha_a['tm_mon']+1,
                    $fecha_a['tm_mday'],
                    $fecha_a['tm_year']+1900);
echo $timestamp."\n"; // valor timestamp: 1421179980
echo strftime($formato, $timestamp)."\n"; //