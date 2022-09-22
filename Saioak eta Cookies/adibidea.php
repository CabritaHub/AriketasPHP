
<?php
        if ($_SERVER['REQUEST_METHOD']== 'POST') {  //EGIAZTATZEN DUGU DATUAK JASO DITUGULA

            //ALDAGAI HAUEK DATU BASEAN GORDETA EGONGO LIRATEKE
            $izenzuzena = 'txurdi';
            $pasahitzzuzena = '123';

            //HAUEK FORMULARIOTIK HARTZEN DITUGU
            $izena = isset($_REQUEST['izena']) ? $_REQUEST['izena'] : null;
            $pasahitza = isset($_REQUEST['pasahitza']) ? $_REQUEST['pasahitza'] : null;

            //SARTUTAKO DATUAK ZUZENAK DIREN ALA EZ
            if ($izenzuzena == $izena && $pasahitzzuzena == $pasahitza){
                //ZUZENA BADA, SAIOA SORTUKO DUGU SARTUTAKO DATUEKIN
                session_start();
                $_SESSION['izena'] = $_REQUEST['izena'];
                $_SESSION['pasahitza'] = $_REQUEST['pasahitza']; //normalean hau ez da erabiltzen, adibide moduan
                //Orrialde segurura bialtzen dugu
                header('Location: profila.php');
                die();
            } else{
                //DATUAK ZUZENAK EZ BADIRA, ERABILTZAILEARI JAKINARAZI
                echo '<p style="color: red">Izena edo pasahitz okerra.</p>';
            }

        }
        ?>

<?php
setcookie("erabiltzailea", "jon", time() + 1000, "/");
if (isset ($_COOKIE["erabiltzailea"])){
    echo "Kaixo berriro, " .$_COOKIE["erabiltzailea"];

}else{
    echo "Kaixo, bisitari berria";
}
?>