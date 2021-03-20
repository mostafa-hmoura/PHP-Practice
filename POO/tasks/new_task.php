<?php

require_once('../app/models/task.php');

$content = $_POST['content'] ?? '';
$desc = $_POST['desc'] ?? '';

if($_SERVER['REQUEST_METHOD'] == "POST"){

    if($content != "" && $desc != ""){
        $newTask = new Task();
        $newTask->addTask($content,$desc);
        echo "Data Inserted !";
    }
    else echo "Erreur Please Enter Data TO inserit";
     
}






?>