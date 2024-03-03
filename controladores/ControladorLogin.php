<?php
require_once("../modelos/ModeloLogin.php");

$login = new ModeloLogin();

$mensaje="";

session_start();

//Comprueba si el usuario facilitado existe y si la contraseña es correcta
if(isset($_POST['enviarLogin'])){

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

require_once("../vistas/login.php")
?>