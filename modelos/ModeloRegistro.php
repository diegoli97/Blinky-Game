<?php

class ModeloRegistro{

    private $db;

    public function __construct(){

        require_once("Conexion.php");

        $this->db = Conexion::conexion();


    }

    //Recoge el nombre indicado y lo registra si no hay otro igual. También comprueba que el valor no sea nulo
    public function set_usuarioRegistrado($nombre,$password){
        $nombre = trim($nombre);
        $password = trim($password);

        if(empty($nombre) || empty($password)){
            $this->db ->close();         
            return "Rellene ambos campos";
        }else{

            $queryRegistrarUsuario = "INSERT INTO usuarios (NombreUsuario, Password, Puntuacion) 
            VALUES ('".$nombre."', '".$password."', 0)";


            try {

            $insercion = $this->db->query($queryRegistrarUsuario);
            $this->db ->close();
            $_SESSION['nombre'] = $nombre;
            $_SESSION['password'] = $password;         
            return "¡Usuario registrado con éxito!";
                
            } catch(Exception $e) {
               return "Usuario no válido";
            }

        }


    }

}