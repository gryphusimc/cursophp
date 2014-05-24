<?php
$url = "http://www.ejemplo.com:8080/pagina.php?parametro1=valor1#apartado";
$partes = parse_url($url);

print_r($partes);
?>