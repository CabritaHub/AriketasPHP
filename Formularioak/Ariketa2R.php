<?php 

    $prezio1 = $_REQUEST['produktu1'];
    $prezio2 = $_REQUEST['produktu2'];
    $prezio3 = $_REQUEST['produktu3'];

        $media = ($prezio1 + $prezio2 + $prezio3) /3;

        echo "Prezioen batez bestekoa " . $media . " da";

    ?>
