<?php

$sueldo = 987;
esVocal($sueldo);
echo "<br>";
$sueldo = 1000;
esVocal($sueldo);
echo "<br>";
$sueldo = 2345;
esVocal($sueldo);
echo "<br>";



function esVocal($sueldo){
    if($sueldo < 1000){
        echo $sueldo . "€ retencion 10%";
    }else if($sueldo == 1000){
        echo $sueldo . "€ retencion 12%";
    }else if($sueldo > 1000){
        echo $sueldo . "€ retencion 14%";
    }
    return true;
}

?>