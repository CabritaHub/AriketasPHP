<!DOCTYPE html>
<html>

<head>
    <title>document</title>
</head>

<body>
    <?php 

      for ($x = 0; $x < 50; $x++) {
            if(Primo($x)){
                echo $x . "<br>";
            }
  }

  function Primo($x)
  {

    for ($y = 2; $y < $x; $y++) {
        if($x%$y ==0){
        return false;            
        }
    }
    return true;
  }

    ?>



</body>

</html>