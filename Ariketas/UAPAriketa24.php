<?php

$filas = 1 ;
$num = 1;

while($filas <= 5){
    
    for($i=0; $i<$filas;$i++){
        echo $num . " ";
        $num++;
    }
    echo "<br>";
    $filas++;
}


?>