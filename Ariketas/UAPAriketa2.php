
<!DOCTYPE html>
<html>

<head>
    <title>document</title>
</head>

<body>
    <?php 

        $numeros=mt_rand(0, 100);

    if($numeros%2==0){
        echo "Es par";
    }
    
    else{
        echo "Es impar";
    }
    ?>



</body>

</html>