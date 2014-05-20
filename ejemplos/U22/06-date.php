<?php
echo date("d/m/Y", time()); // Por ejemplo 05/11/2009
// "d" significa día con cero un delante si precede
// "m" significa mes con cero un delante si procede
// "Y" significa año con cuatro dígitos
echo date("j \d\e F \d\e Y \a \l\a\s H:i", time());
// Por ejemplo 13 de February de 2014 a las 20:13
// "j" significa día sin cero delante
// "F" significa el nombre del mes en inglés
// "Y" significa el año
// "H" significa la hora en formato 24h
// "i" significa el minuto