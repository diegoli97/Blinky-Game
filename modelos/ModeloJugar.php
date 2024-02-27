<?php

class ModeloJugar{

    private $db;
    private $puntuacion;
    private $usuario;

    public function __construct($usuarioIniciado){

        require_once("Conexion.php");

        $this->db = Conexion::conexion();
        $this->usuario = $usuarioIniciado;

    //Si el usuario no es nulo entonces hace la consulta en la BBDD y obitiene su puntuación. Si no puntuacion = 0
        if(!is_null($this->usuario)){
            $consulta = $this->db->query("SELECT Puntuacion FROM usuarios WHERE NombreUsuario="."'".$this->usuario."'");
            $this->puntuacion = $consulta->fetch_array()[0];
            $consulta->free_result();
        }else{
            $this->puntuacion = 0;
        }
        

    }

    //Obtiene la puntuación del usuario que ha iniciado sesión
    public function get_puntuacion(){
        return $this->puntuacion;
        
    }

    //Actualiza la puntuación del jugador si es menor a la que ya tenía (con la excepción de 0)
    public function set_puntuacion($puntuacionObtenida){
        
        if(!is_null($this->usuario)){
            
            if($puntuacionObtenida<$this->puntuacion || $this->puntuacion ==0){
                $query = "UPDATE usuarios 
                SET Puntuacion =".$puntuacionObtenida." 
                WHERE NombreUsuario ='".$this->usuario."';";
                $this->db->query($query);
                $this->db ->close();
            }

        }
        

    }



}