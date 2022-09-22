<?php 

$Año= 339;

if($Año%4 == 0 && $Año%100 !=0){
echo $Año . " Es bisiesto";
}else if($Año%400 == 0){
    echo $Año . " Es bisiesto";
}else{
    echo $Año . " No es bisiesto";
}

?>