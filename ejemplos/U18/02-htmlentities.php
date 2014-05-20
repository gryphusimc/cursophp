<?php
$precio = "El precio será de 1000€";

echo htmlspecialchars($precio);
// El precio será de 1000€

echo htmlentities($precio);
// El precio ser&aacute; de 1000&euro;
?>