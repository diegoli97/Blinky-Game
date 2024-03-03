<?php

require_once("../modelos/ModeloRanking.php");
require_once("../vistas/convertirTiempo.php");

$usuario = new ModeloRanking();

$allUsuarios = $usuario->get_allUsuarios();


session_start();
//Si el usuario no inicio sesión redirige al Login
if(!isset($_SESSION['nombre'])){
    header('Location: ControladorLogin.php');
}

require_once("../vistas/verPuntuacion.php");