<?php

calcularIva(mt_rand(1,50),mt_rand(1,50));

function calcularIva($a,$b =21){
    echo "El iva del " . $b . " en el dinero de  " . $a . " es " . ($a * $b)/100;
}

?>