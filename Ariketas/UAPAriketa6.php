<?php

$capital = 1400;
$interes= 12;
$año=12;       
if ($interes >=0){
   $dinerofinal= $capital*(1+$interes/100)*$año;
   echo $dinerofinal;
}else {
    echo "ezin da egin x zenbaki negatibo bat da";
}



 ?>