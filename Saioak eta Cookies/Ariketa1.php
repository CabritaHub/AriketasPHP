<!DOCTYPE html>
<html>
<body>

    <?php
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        if (isset($_POST['enviar'])) {
            setcookie("color",  test_input($_POST["cool"]), time()+3600, "/");
            header('Location: Ariketa1.2.php');
        }
        else{ 
?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="color" name="cool"><label> Elige un color</label> 
            <input type="submit" value="Enviar" name="enviar">
    </form>

<?php
        }
?>


</body>
</html>