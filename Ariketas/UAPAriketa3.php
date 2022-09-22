<?php

$teclado = "a";
esVocal($teclado);
echo "<br>";
$teclado = "b";
esVocal($teclado);
echo "<br>";
$teclado = "c";
esVocal($teclado);
echo "<br>";
$teclado = "d";
esVocal($teclado);
echo "<br>";
$teclado = "e";
esVocal($teclado);
echo "<br>";

function esVocal($teclado){
    $vocales = array("a", "e", "i", "o", "u");
    if (in_array($teclado, $vocales)){
        echo $teclado . " es vocal";
    } else echo $teclado . " no es vocal";
    return true;
}

?>