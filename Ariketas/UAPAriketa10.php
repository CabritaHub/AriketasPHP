<?php 

$usuario = "Penelope";

esUsuario($usuario);

function esUsuario($usuario){

    if(strlen($usuario) >= 8 && strlen($usuario) <= 12 && !is_numeric(substr($usuario, 0, 1))){

        echo "Ondo";
    }else{
        echo "Error";
    }  

}


?>


