<?php include('./includes/header.php'); 

session_start();

require_once('./includes/config.php');

require_once('./includes/library.php');

isauth();

?>


<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>admin Panel : <?php echo $_SESSION['email']; ?></h1>
        </div>
    </div>
</div>


<?php include('./includes/footer.php'); ?>
