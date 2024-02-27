<?php 


class Conexion{

    public static function conexion(){
        $conexion=new mysqli("localhost", "root", "", "blinky_game");
        if ($conexion->connect_errno){
            echo "Error con la conexión a BBDD: ".$conexion->connect_error;
        
        }else{
            $conexion->query("SET NAMES 'utf8'");
            return $conexion;
        }
    }
}



?>