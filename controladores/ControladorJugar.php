<?php

require_once("../modelos/ModeloJugar.php");

//Comprueba si un usuario que está en la página de juego ha iniciado sesión o no.
//Si ha iniciado se registrará la puntuación
//Si no, podrá jugar pero no quedará registrado
if(isset($_SESSION['nombre'])){
    $usuarioJugando = $_SESSION['nombre'];
}else{
    $usuarioJugando = null;
}
$juego = new ModeloJugar($usuarioJugando);
$puntuacionActual = $juego->get_puntuacion();

?>