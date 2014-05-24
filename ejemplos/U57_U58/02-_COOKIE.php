<?php

setcookie("uno",  "valor 1");
setcookie("dos",  "valor 2");
setcookie("tres", "valor 3", time()+10); // Dura 10 segundos

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";