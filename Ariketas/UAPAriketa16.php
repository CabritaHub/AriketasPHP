<?php

$znbk = array();

for($i = 5; $i <= 50; $i++){

    if($i%2==0){
        array_push($znbk,"$i");
    }
}

echo implode(", ",$znbk );

 ?>
