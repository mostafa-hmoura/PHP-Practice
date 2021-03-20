<?php


// $note = 12;

// if ($note > 16) echo "Excelent";
// else if ($note > 12) echo "Pamal";
// else echo "assez bien";


$courses = [

    ['title' => 'JavaScript','Prix' => 40],
    ['title' => 'PHP','Prix' => 23],
    ['title' => 'JAVA','Prix' => 50],
    ['title' => 'Laravel','Prix' => 55],
    ['title' => 'JAVA','Prix' => 50],
    ['title' => 'React JS','Prix' => 60]

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
    
    <h1>My course</h1>

    <ul>
        <?php foreach ($courses as $co) {
            if ($co['Prix'] >= 50) {
            ?>
        <li><?php echo $co['title'];}?></li>
        <?php } ?>
    </ul>

</body>
</html>