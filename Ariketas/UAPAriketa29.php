<?php 

function suma($a){
    echo "La suma de numero de " . $a . " y 1 es ";
   echo ($a + 1);
}

suma(mt_rand(1,50));

?>