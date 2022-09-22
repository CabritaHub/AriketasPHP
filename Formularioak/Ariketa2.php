<!DOCTYPE html>
<html>

<head>
    <title>document</title>
</head>

<body>
<?php 

$izenak = array("Ainara", "Txelis", "Hodei", "Izar", "Rashid", "Melquiades", "Miriam", "Nahuel", "Mirta");
$ArrayM = array();


foreach ($izenak as $x) {


    if(substr($x, 0 ,1) == 'M'){

        array_push($ArrayM, $x);

    }

}

for ($x = 0; $x <sizeof($ArrayM); $x++) {


   echo $ArrayM[$x];
   echo "<br>";
}



    ?>



</body>

</html>