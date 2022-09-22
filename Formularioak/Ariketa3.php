<!DOCTYPE html>
<html>

<head>
    <title>document</title>
</head>

<body>
    <?php 
 
 echo "<table border='1'><br />";


 for ($row = 0; $row < 20; $row ++) {
    echo "<tr>";
 
    for ($col = 1; $col <= 10; $col ++) {
         echo "<td>", (("0")), "</td>";
    }
 
    echo "</tr>";
 }
 
 echo "</table>";
    ?>



</body>

</html>