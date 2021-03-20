<?php


function auth($email,$pass){

    return ($email == EMAIL && $pass == PASSWORD);

}

function redirect($page){

    header("Location : $page.php");

}

function versesion(){
    return isset($_SESSION['email']);
}

function isauth(){
    if(!versesion()) {
        redirect('login');
        die();
    }
}

?>