<?php

$title = 'Calculator';

// include Message d'erreur et chargement de la page

// require arrete le chargement de la page 

include('./includes/Calculator.php')


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
        <ul>
            <li>1</li>
            <li>3</li>
            <li>3</li>
            <li>4</li>
        </ul>
        <?php include('./includes/code.php') ?>
    <p><?php echo Addition(3,4); ?></p>
    <p><?php echo Sous(3,4); ?></p>
    <?php include('./includes/code.php') ?>

    <p><?php echo Division(3,4); ?></p>
    <p><?php echo Multiplication(3,4); ?></p>

    <?php include('./includes/code.php') ?>

    

</body>
</html>