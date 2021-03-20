<?php

require_once('./includes/library.php');

session_start();

session_unset();

session_destroy();


redirect('login');

die();

?>