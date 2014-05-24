<?php
include 'bar.php'; // Relativa: /home/usuario/public/bar.php
include './bar.php'; // Relativa: /home/usuario/public/bar.php
include 'ruta/foo.php'; // Relativa: /home/usuario/public/ruta/foo.php
include '../bar.php'; // Relativa: /home/usuario/bar.php
include '/var/www/bar.php'; // Absoluta: /var/www/bar.php