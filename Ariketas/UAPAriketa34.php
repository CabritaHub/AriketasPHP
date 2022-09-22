<!DOCTYPE html>
<html>
<body>

<?php

    echo "<table border=1>";
    for($i = 1; $i <= 4; $i++)
    {
        $v = $i;
        echo "<tr>";
        for($x = 1; $x <= 4; $x++)
        {
            echo "<td>";
            echo $v;
            $v = $v * 2;
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

?>

</body>
</html>