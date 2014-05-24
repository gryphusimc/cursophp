<?php
$temp = tmpfile();
fwrite($temp, "escribiendo en el archivo temporal");
echo "Consultar el fichero temporal en ".sys_get_temp_dir()."\n";
echo "Pulsa intro para continuar";
fgetc(STDIN);
fseek($temp, 0);
echo fread($temp, 1024)."\n";
fclose($temp); // esto elimina el archivo