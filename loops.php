<?php


    $courses = ['laravel','php','javascript'];

    $cours = [

        ['title' => 'JavaScript','Prix' => 40],
        ['title' => 'PHP','Prix' => 23],
        ['title' => 'JAVA','Prix' => 50],
        ['title' => 'Laravel','Prix' => 55],
        ['title' => 'JAVA','Prix' => 50],
        ['title' => 'React JS','Prix' => 60]
    
    ];
    

    for($i=0 ; $i < count($courses) ; $i++ ){

        echo "$courses[$i] <br />";

    }

    $i = 0;
    while ($i < count($courses)){


        echo "<b>$courses[$i]</b> <br />";
        $i++;

    }

    foreach($courses as $course) echo "<i>$course</i> <br />";

    foreach($cours as $c) echo "<b>".$c['title']."</b> - <i>".$c['Prix']."</i><br />";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course</title>
</head>
<body>
    <h1>Liste Of Course</h1>
    <ul>
        <?php
        foreach($cours as $c){
        ?>
        <li><?php echo $c['title'].' -> Prix: '.$c['Prix'] ?></li>   
        <?php } ?>        
       
    </ul>
</body>
</html>