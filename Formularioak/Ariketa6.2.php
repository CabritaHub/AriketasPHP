<!DOCTYPE html>
<html>

<head>
    <title>document</title>
</head>

<body>


    <?php
 
    $Nombre =$_REQUEST['izena'];
    $direccion =$_REQUEST['direkzioa'];
    $email =$_REQUEST['mail'];
    $password1 =$_REQUEST['pass'];
    $password2 =$_REQUEST['pass2'];
    $fecha =$_REQUEST['date'];
    $sexo =$_REQUEST['radios'];
    $temas =$_REQUEST['check'];
    $aficiones =$_REQUEST['selector'];




    echo 
    "<table border = '1'>
    <tr>
        <td>Nombre: </td>
        <td> ". $Nombre . "</td>
    </tr>
    <tr>
        <td>Direccion: </td>
        <td> ". $direccion . "</td>
    </tr>
    <tr>
        <td>Email</td>
        <td> ". $email . "</td>
    </tr>
    <tr>
        <td>Contraseña: </td>
        <td> ". $password1 . "</td>
    </tr>
    <tr>
        <td>Fecha: </td>
        <td> ". $fecha . "</td>
    </tr>
    <tr>
        <td>Sexo: </td>
        <td> ". $sexo . "</td>
    </tr>
    <tr>
        <td>Temas: </td>
        <td> ". $temas . "</td>
    </tr>
    <tr>
      <td>Aficcion: </td>
      <td> ". $aficiones . "</td>
    </tr>
    </table>";

    ?>

    <form method="post" action="Ariketa6R.php">

        <input type="submit">

    </form>


    <form method="post" action="Ariketa6.php">

        <button>CORREGIR DATOS</button>

        

    </form>

</body>

</html>