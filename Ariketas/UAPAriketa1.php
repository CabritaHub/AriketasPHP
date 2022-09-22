
<!DOCTYPE html>
<html>

<head>
    <title>document</title>
</head>

<body>
    <?php 



        $numeros=mt_rand(0, 100);

    if($numeros >= 18){
        echo "Es mayor de edad";
    }
    
    else{
        echo "No es mayor de edad";
    }

    ?>



</body>

</html>