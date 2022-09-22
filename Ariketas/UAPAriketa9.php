<?php 

$nombre = "Pepe";
$apellido1 = "Perez";
$apellido2 = "Santos";

esPersona($nombre, $apellido1, $apellido2);

function esPersona($nombre, $apellido1, $apellido2){

if($nombre != "Antonio"){
    if("apellido1" != "Ruiz" && "apellido2" != "Santos"){
        echo "Error, kredentzialak txarto daude";
    }else{
        echo "Ongi etorri " . $nombre ." ". $apellido1 . " ". $apellido2;
    }
}else{
    echo "Ongi etorri " . $nombre ." ". $apellido1 . " ". $apellido2;
}

}


?>


