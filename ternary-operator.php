<?php

$cours = [

    ['title' => 'JavaScript','Prix' => 40],
    ['title' => 'PHP','Prix' => 23],
    ['title' => 'Symfony','Prix' => 43],
    ['title' => 'VueJS','Prix' => 33],
    ['title' => 'VueJS FREE','Prix' => 0],
    ['title' => 'JAVA','Prix' => 50],
    ['title' => 'Laravel','Prix' => 55],
    ['title' => 'JAVA','Prix' => 50],
    ['title' => 'React JS','Prix' => 60],
    ['title' => 'Laravel Free','Prix' => 0]

];

foreach($cours as $c) {

   echo $c['Prix'] > 30 ? "Ghali <br />" : "Rkhiss <br />";

}


?>