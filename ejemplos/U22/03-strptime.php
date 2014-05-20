<?php
$fecha = "13 de enero de 2015 a las 20:13";
print_r(strptime($fecha, "%d de %B de %Y a las %H:%M"));