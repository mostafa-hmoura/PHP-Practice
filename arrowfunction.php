<?php

$price = [1,3,54,22,112,34];

$pas = 2;

$res = array_map(fn($p) => $p*$pas,$price);

print_r($res);

$add = fn($a,$b) => $a+$b;

echo "<br />".$add(2,3);

?>