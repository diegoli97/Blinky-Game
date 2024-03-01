<?php

session_start();

require("../controladores/ControladorRegistro.php");

$mensaje="";


if(isset($_POST['enviarRegistro'])){
//Comprueba si el usuario facilitado existe y si la contraseña es correcta

$mensaje = $registro->set_usuarioRegistrado($_POST['nombreUsuario'],$_POST['passwordUsuario']);
   

}



?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro</title>
        <link rel="stylesheet" href="css/login.css">
        <!-- Link para iconos de font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>
    <body>
        <div id="menuLogin">
            <h1>Registrarse</h1>
            <form action="registro.php" method="post">
                        <input type="text" placeholder="Nombre" name="nombreUsuario"><br>
                        <input type="text" placeholder="Contraseña" name="passwordUsuario"><br>
                        <button type="submit" name="enviarRegistro">Registrarse</button>
            </form>
            <h4><?=$mensaje?></h4>
        </div>
        <a href="/index.php"><button class="botonSalida"><i class="fas fa-door-open puertaSalida"></i>Volver</button></a>
    </body>

</html>