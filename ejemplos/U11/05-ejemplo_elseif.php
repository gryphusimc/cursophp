<?php
$altitud = 51;

if ($altitud >= 80) {
	echo "Termosfera\n";
} elseif ($altitud >= 50) {
	echo "Mesosfera\n";
} elseif ($altitud >= 15) {
	echo "Estratosfera\n";
} else {
	echo "Troposfera\n";
}