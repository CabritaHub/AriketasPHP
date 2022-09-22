<?php 

    $nom = $_REQUEST['izena'];
    $p1 = $_REQUEST['selector'];
    $p2 = $_REQUEST['check'];
    $p3 = $_REQUEST['radio'];
        
    ($p1 == "Marvel") ? $p1 = "bien" : $p1 = "mal";
    ($p2 == "Gernika") ? $p2 = "bien" : $p2 = "mal";
    ($p3 == "Egia") ? $p3 = "bien" : $p3 = "mal";

    echo $nom . ", tu respuestas son: <br>
    Respuesta1: " . $p1 .  " <br>
    Respuesta2: " . $p2 .  " <br>
    Respuesta3: " . $p3 .  " <br>";
    

    ?>
