<?php
header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="tudocumento.pdf"');

// Abrimos y "mostramos" el contenido de documento.pdf
readfile('documento.pdf');
exit;