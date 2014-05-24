<?php
$temperatura = 29;

if ($temperatura >= 100) {
	echo "Agua en estado gaseoso\n";
} elseif ($temperatura >= 0) {
	echo "Agua en estado líquido\n";
} else {
	echo "Agua en estado sólido\n";
}