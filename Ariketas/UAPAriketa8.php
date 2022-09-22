<?php 

$Año= 2024;

$mes= "Febrero";


if($Año%4 == 0 && $Año%100 !=0){
    echo $Año . " Es bisiesto ";
    esBisiesto($mes);

    }

    else if($Año%400 == 0){
        echo $Año . " Es bisiesto ";
        esLargo($mes);

    }

    else{
        echo $Año . " No es bisiesto ";
        esLargo($mes);

    }
    

    function esLargo($mes){
        $meses=array("Abril", "Junio", "Septiembre", "Noviembre" );
        if($mes == "Febrero"){
            echo $mes . " Tiene 28 dias";
        }elseif (in_array($mes, $meses)){
            echo $mes . " Tiene 30 dias";
        } else echo $mes . " Tiene 31 dias";
        return true;
    }

    function esBisiesto($mes){
        $meses=array("Abril", "Junio", "Septiembre", "Noviembre" );
        if($mes == "Febrero"){
            echo $mes . " Tiene 29 dias";
        }elseif (in_array($mes, $meses)){
            echo $mes . " Tiene 30 dias";
        } else echo $mes . " Tiene 31 dias";
        return true;
    }
?>


