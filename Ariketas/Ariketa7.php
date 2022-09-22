
<!DOCTYPE html>
<html>
<body>

<?php

$numeros = array();
$numero = 4;
$suma = 0;

for($i = 0; $i < $numero; $i++)
{
    array_push($numeros, mt_rand(0, 10));
}

foreach($numeros as $x) {
    echo "- " . $x . "<br>";
}

echo "<br><br><br>";

for($i = 0; $i < 3; $i++)
{
    $n = count($numeros) - $i - 1;
    $suma += $numeros[$n];
}

echo "- " . $suma;
echo "<br>";

if($suma <= 10){
    echo "Entre 1 y 10";
}
if($suma <= 20 && $suma > 10){
    echo "Entre 10 y 20";
}
if($suma > 20){
    echo "Mas de 20";
}

?>



</body>
</html>
