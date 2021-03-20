<?php

// Ref scope

$name='Med';

function SaySalam(&$name,$age){
    $name = "Mostafa";
    echo "Salam ".$name." age : ".$age;
}

SaySalam($name,32);

echo "$name";

?>