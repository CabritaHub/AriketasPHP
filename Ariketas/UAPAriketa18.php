<?php

$znbk = mt_rand(0,50);
$gehiketa = 0;

for($i = 0 ; $i < $znbk ; $i++){
    if ($i%2 != 0){
        $gehiketa += $i;
    }
}
echo $gehiketa . " es el resultado de la suma de los numeros impares de " . $znbk;

?>