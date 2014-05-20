<?php
   /* NOTA: Para consultar un carácter concreto de un string, podemos acceder
   a la posición del carácter como si el string fuera un array de caracteres.

   Ejemplo:
   $mensaje = "Hola";
   echo $mensaje[0];

   Muestra 'H' */

$str = "Palabra";

for ($i=0; $i<strlen($str); $i++) {
	echo $str[$i]."\n";
}