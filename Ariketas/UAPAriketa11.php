<?php 

$numero = "123456789";

esNumero($numero);

function esNumero($numero){

    if(strlen($numero) ==9 && is_numeric(substr($numero, 0, 9))){

        echo "Formato egokia";
    }else{
        echo "Formato txarra";
    }  

}



?>


