<?php
$numero = 0;

funcion($numero);

function funcion($numero){
    echo ($numero +1);
    $numero += 1;
    if($numero < 3){
        funcion($numero); 
    }
}
?>
