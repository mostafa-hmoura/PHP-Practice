<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style></style>
</head>
<body>
    

    <!-- <form action="new_task.php" method="POST" >
        <input type="text" name="content" id=""> <br /> 
        <br /> 
        <input type="text" name="desc" id=""> <br />
        <br /> 
        <input type="submit" value="Ajouter">
    </form> -->
    <?php
    require_once('../app/models/task.php');

    $newTask = new Task();
    
    $newTask->updateTask(3,'laravel','backend');
    //  $newTask->deleteTask(5);

    ?>

</body>
</html>