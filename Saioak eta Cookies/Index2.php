<html>

<body>
    <?php

if (isset($_POST['enviar1'])) {
     if(!isset($_COOKIE["prueba"])){
     setcookie("prueba", "Esta es un galleta Maria", time()+$_POST["num"], "/");
     echo "Tu galletita esta lista :)";
     }
             else{
            echo "Ya tienes una galleta :|";
     }
     }

if (isset($_POST['enviar2'])) {
     if(!isset($_COOKIE["prueba"])){
     setcookie("prueba", "Esta es un galleta Maria", time()-60, "/");
     echo "Tu galletita esta borrada :)";
     }
             else{
            echo "Ya tienes una galleta :|";
    }
    }

if (isset($_POST['enviar3'])) {
     if(isset($_COOKIE["prueba"])){
     echo "Tu galletita esta "  . $_COOKIE['prueba'];
     }
                else{
               echo "No hay galleta :|";
     }
     }
?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="range" name="num" min="0" max="60"><label> Elige cuanto tiempo dura la cookie</label> <br><br>
        <input type="submit" value="Crear galleta" name="enviar1">
    </form>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="submit" value="Borrar galleta" name="enviar2">
    </form>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="submit" value="Saber estado de la galleta" name="enviar3">
    </form>

</body>

</html>