<?php
require_once("../modelos/ModeloBuscarUsuarios.php");
require_once("../vistas/convertirTiempo.php");

if (isset($_GET['buscar'])){

    $nombreBuscado = $_GET['buscarUsuario'];

    $usuario = new ModeloBuscarUsuarios($nombreBuscado);

    $usuariosEncontrados = $usuario->get_usuariosEncontrados();

}

if (isset($_GET['buscarDentro'])){

    $nombreBuscado = $_GET['buscarUsuarioDentro'];
    $usuario = new ModeloBuscarUsuarios($nombreBuscado);

    $usuariosEncontrados = $usuario->get_usuariosEncontrados();


}

require_once("../vistas/buscarUsuarios.php");
?>