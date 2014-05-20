<?php
if ($edad >= 18) {
	echo "Puedes votar\n";
} else {
	echo "Aún no puedes votar\n";
}

// Podría reescribirse como:
if ($edad >= 18):
	echo "Puedes votar\n";
else:
	echo "Aún no puedes votar\n";
endif;