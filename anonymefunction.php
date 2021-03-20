<?php

$price = [1,3,54,22,112,34];

$pas = 2;

$res = array_map(function ($item) use($pas) {
    
    return $item*$pas;

},$price);

print_r($res);

?>