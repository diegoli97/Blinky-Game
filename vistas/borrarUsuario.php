<?php

//Borra al usuario de la base de datos y desloguea
session_start();
require_once("../modelos/Conexion.php");

if (isset($_SESSION['nombre'])){
$db = Conexion::conexion();
$queryBorrarUsuario = "DELETE FROM usuarios WHERE NombreUsuario='".$_SESSION['nombre']."'";
 
$db->query($queryBorrarUsuario);

header("Location:logout.php");

}else{
    header("Location:../index.php");
}


?>