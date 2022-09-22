<!DOCTYPE html>
<html>

<head>
    <title>document</title>
</head>

<body>
    <?php 
 
 $nums = 0;
 echo "<table border='1'><br />";


 for ($row = 0; $row < 10; $row ++) {
    echo "<tr>";
 
    for ($col = 1; $col <= 5; $col ++) {
         echo "<td>", (($nums +1)), "</td>";
         $nums +=1;
    }
 
    echo "</tr>";
 }
 
 echo "</table>";
    ?>



</body>

</html>