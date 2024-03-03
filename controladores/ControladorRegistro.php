<?php
require_once("../modelos/ModeloRegistro.php");

$registro = new ModeloRegistro();

session_start();


$mensaje="";


if(isset($_POST['enviarRegistro'])){
//Comprueba si el usuario facilitado existe y si la contraseña es correcta

$mensaje = $registro->set_usuarioRegistrado($_POST['nombreUsuario'],$_POST['passwordUsuario']);
   

}


require_once("../vistas/registro.php")
?>