<?php
	$variable1 = FALSE;
	$variable2 = TRUE;

	if ((!$variable1 && $variable2) || ($variable1 && !$variable2)) {
		echo "Solo uno es TRUE";
	} else {
		echo "Los dos son TRUE o los dos son FALSE";
	}