logout.php
<?php
//Saioa hasi
session_start();
//saioa itxi
session_unset();
session_destroy();
//login.php-ra bialdu
header ('Location: login.php');
die();
?>