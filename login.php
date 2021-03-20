<?php 

include('./includes/header.php');

require_once('./includes/config.php');

require_once('./includes/library.php');

session_start();

// if(isauth()) {
//     redirect('admin'); die();
// }


$statut = "";
$email = $_POST['login'] ?? '';
$password = $_POST['password'] ?? '';

if($_SERVER['REQUEST_METHOD'] == "POST"){

        if(empty($email)) $statut = "Email ! <br />";
        else {
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $statut .= "Email invalide ! <br />";
            }
        }
        if(empty($password)) $statut .= "Password ! <br />";
        else {

            if(strlen($password < 8)){
                $statut .= "Password < 8 caracters ! <br />";
            }

            $option = array('options' => array('regexp' => '/^([a-z0-9 ])+$/i'));
            if(!filter_var($password,FILTER_VALIDATE_REGEXP,$option)){
                $statut .= "Password Should be 8 caracteres ! <br />";
            }
        }

        if(empty($statut)){
            if(auth($email,$password)){
            $_SESSION['email'] = $email;
            redirect("admin");
            die();
            }
            else $statut = "Email ou password Inccorect"; 
        }
     
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto mt-5">

            <?php if($statut != "") {?>
            <div class="alert alert-danger"><?php echo "$statut";} ?></div>

            <form action="" method="post">
                <div class="form-group">
                    <label for="login">Email :</label>
                    <input name="login" id="login" type="text" class="form-control"></div>
                <div class="form-group">
                    <label for="pass">Passowrd :</label>
                    <input name="password" id="pass" type="password" class="form-control"></div>
                    <input type="submit" value="Login" class="btn btn-danger btn-block">
            </form>
        </div>
    </div>
</div>


<?php

include('./includes/footer.php');

?>