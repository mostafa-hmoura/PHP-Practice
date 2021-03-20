<?php

    $courses = [

        ['title' => 'JavaScript','Prix' => 40],
        ['title' => 'PHP','Prix' => 23],
        ['title' => 'JAVA','Prix' => 50],
        ['title' => 'Laravel','Prix' => 55],
        ['title' => 'JAVA','Prix' => 50],
        ['title' => 'React JS','Prix' => 60]

    ];

    function FormatCourse($title,$price) {

        $p = ConvertPrice($price);

        return "$title $p MAD <br />";

    }

    function ConvertPrice($price){

        return $price*10;

    }

    foreach($courses as $course)    
    echo FormatCourse($course['title'],$course['Prix']);

?>