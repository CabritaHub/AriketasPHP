<?php

$N = 10;
$K = 0;
$NF = 0;
$znbk = array();

while($K < $N){

$NF = $NF +2;

array_push($znbk,"$NF");

$K=$K+2;
}
echo implode(", ",$znbk );
    
 ?>
