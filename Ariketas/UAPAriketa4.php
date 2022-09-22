<?php

$teclado = "a";
esVocal($teclado);
echo "<br>";
$teclado = "b";
esVocal($teclado);
echo "<br>";
$teclado = "C";
esVocal($teclado);
echo "<br>";
$teclado = "D";
esVocal($teclado);
echo "<br>";
$teclado = "3";
esVocal($teclado);
echo "<br>";




function esVocal($teclado){
    if(is_numeric($teclado)){
        echo "Es un numero";
    }else if(ctype_lower($teclado)){
        echo $teclado . " Es minuscula";
    } else echo $teclado . " Es mayuscula";
    return true;
}

?>