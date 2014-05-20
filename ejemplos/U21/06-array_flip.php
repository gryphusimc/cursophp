<?php
$array1 = array('a' => '1001', 'b' => '2031', 'd' => '4096');
$array2 = array_flip($array1);
// devuelve array('1001' => 'a', '2031' => 'b', '4096' => 'd')