<?php
$nombre = '<a href="http://a.cz/virus.php">Click aquí</a>';

echo $nombre;
// <a href="http://a.cz/virus.php">Click aquí</a>

echo htmlspecialchars($nombre);
// &lt;a href=&quot;http://a.cz/virus.php&quot;&gt;Click aquí&lt;/a&gt;
?>