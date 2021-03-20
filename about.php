<?php 

include('./includes/header.php');

?>

<h2>Master Page</h2>

<?php

    $name = "";
    $age = "";    

    if(in_array($_SERVER['REQUEST_METHOD'], ['POST'])){
        $name = htmlspecialchars($_REQUEST['fullname']) ?? "";
        $age = htmlspecialchars($_REQUEST['age']) ?? "";
    }
    

    echo "$name";

?>

<div class="container">
    <div class="row">
        <form action="" method="POST">
            <div class="form-group">
                <label for="">Your Full name : </label>
                <input name="fullname" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Your age : </label>
                <input name="age" type="text" class="form-control">
            </div>
            <button type="submit" class="btn btn-block btn-success">Create</button>
        </form>
    </div>
</div>


<?php

include('./includes/footer.php');

?>
