<?php
$volumen = "/"; // En Windows, pon 'C:/';
echo disk_free_space($volumen)." libres de un total de ";
echo disk_total_space($volumen)."\n";