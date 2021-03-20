<?php

// -1 rouge 0 orange 1 vert

$pan = 1;

// if ($pan === 0) echo "Orange";
// else if ($pan === -1) echo "Rouge";
// else if ($pan === 1) echo "Vert";
// else echo "Attention error 505";

switch($pan){

    case 0 : {
        echo "Orange"; break;
    } 
    case -1 : echo "Rouge"; break;
    case 1 : echo "Vert"; break;
    default : echo "erreur 505";

}

?>