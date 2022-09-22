<?php 

    $altura = $_REQUEST['alt'];
    $diametro = $_REQUEST['dia'];
    $radio = $diametro/2;

    $bolumena = pi() * $altura * $radio * $radio;

    echo "Zilindroren bolumena " . $bolumena . " da";

    ?>
