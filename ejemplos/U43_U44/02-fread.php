<?php
$handle = fopen("http://www.php.net/", "rb");
$contents = '';
$i = 0;
while (!feof($handle)) {
	$i++;
	$contents .= fread($handle, 8192);
}
fclose($handle);

echo "Hemos hecho $i iteraciones para leer ".strlen($contents)."bytes";