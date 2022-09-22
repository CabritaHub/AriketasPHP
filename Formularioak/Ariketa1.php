<!DOCTYPE html>
<html>

<head>
    <title>document</title>
</head>

<body>
    <?php 
   $frutak = array(1.1, 1.1, 1.1, 1.1, 1.1, 1.1, 1.1, 1.1, 1.1, 1.1, 1.1, 1.1, 1.1, 1.1, 1.1, 1.1, 1.1, 1.1, 1.1, 1.1);
   $Y=0;


   for ($x = 0; $x < 20; $x++) {

    $Y=$Y+$frutak[$x];

    echo $Y;
    echo "<br>";

}

 
    echo $Y/20;

    ?>



</body>

</html>