<?php
is_numeric(12); // TRUE
is_numeric(1.13); // TRUE
is_numeric(112,3); // FALSE y Warning
is_numeric("61"); // TRUE
is_numeric("#61"); // FALSE
is_numeric("doce"); // FALSE