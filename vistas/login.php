<?php

require("../controladores/ControladorLogin.php");

$mensaje="";

session_start();


if(isset($_POST['enviarLogin'])){
//Comprueba si el usuario facilitado existe y si la contraseña es correcta
    $usuarioCorrecto = $login->get_loginCorrecto($_POST['nombreUsuario'],$_POST['passwordUsuario']);

    echo $usuarioCorrecto;

    if($usuarioCorrecto){
        $_SESSION['nombre'] = $_POST['nombreUsuario'];
        $_SESSION['password'] = $_POST['passwordUsuario'];
        header('Location: ../index.php');
    }else{
        $mensaje= "Usuario o contraseña incorrectos";
    }


}



?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="css/login.css">
        <!-- Link para iconos de font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>
    <body>
        <div id="menuLogin">
            <h1>Inicio de sesión</h1>
            <form action="login.php" method="post">
                        <input type="text" placeholder="Nombre" name="nombreUsuario"><br>
                        <input type="text" placeholder="Contraseña" name="passwordUsuario"><br>
                        <button type="submit" name="enviarLogin">Iniciar Sesión</button>
            </form>
            <h4><?=$mensaje?></h4>
        </div>
        <a href="/index.php"><button class="botonSalida"><i class="fas fa-door-open puertaSalida"></i>Volver</button></a>
    </body>

</html>