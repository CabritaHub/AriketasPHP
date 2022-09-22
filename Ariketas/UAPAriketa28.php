<?php 

function media($a, $b){
    echo "La media de los numeros de " . $a . " y ". $b . " ";
   echo ($a + $b)/2;
}

media(mt_rand(1,50), mt_rand(1,50));

?>


