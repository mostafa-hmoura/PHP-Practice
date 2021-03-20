<?php


$courses = [

    ['title' => 'JavaScript','Prix' => 40],
    ['title' => 'PHP','Prix' => 23],
    ['title' => 'JAVA','Prix' => 50],
    ['title' => 'Laravel','Prix' => 55],
    ['title' => 'JAVA','Prix' => 50],
    ['title' => 'React JS','Prix' => 60]

];

echo $courses[3]['title'];

print_r($courses[2]);

$courses[2]['title']='Spring';

print_r($courses[2]);

$courses[] = [ 'title' => 'GO', 'Prix' => 22 ];
$courses = [...$courses,'title' => 'Angular', 'Prix' => 22,'title' => 'Flutter', 'Prix' => 220];

print_r($courses);

?>