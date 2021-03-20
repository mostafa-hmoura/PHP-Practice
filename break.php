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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Liste Of Courses</h1>

    <ul>
        <?php foreach($cours as $c){  if($c['Prix'] < 10) continue;
            
            if ($c['title'] == 'PHP' ) break;
            
            ?>
            <li><?php echo $c['title']; ?></li>
        <?php } ?>
    </ul>



</body>
</html>