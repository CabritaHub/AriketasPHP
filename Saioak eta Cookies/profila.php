<?php
//EGIAZTATUKO DUGU SAIOA EXISTITZEN DEN
session_start();
if(!isset($_SESSION['izena'])){
    //BESTELA, LOGIN ORRIALDERA BIALDUKO DUGU BERRIRO
    header('Location: login.php');
    die();
}
?>
<html>
    <body>
        <h1>Ongi etorri <?php echo $_SESSION['izena'] ?></h1>
        <h1>pasahitza <?php echo $_SESSION['pasahitza'] ?></h1>
        <!-- saioa ixteko botoia -->
        <a href="logout.php"> Saioa itxi </a>
</body>
</html>