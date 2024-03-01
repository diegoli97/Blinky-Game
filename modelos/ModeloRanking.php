<?php

class ModeloRanking{

    private $db;
    private $rankingUsuarios;
    private $allUsuarios;

    public function __construct(){

        require_once("Conexion.php");

        $this->db = Conexion::conexion();
        $this->rankingUsuarios=array();
        

    }

    //Recoge el nombre y la puntuacion de los 10 usuarios con el menor tiempo, es decir, la mejor puntuación
    public function get_rankingUsuarios(){
        $consulta = $this->db->query("SELECT NombreUsuario, Puntuacion FROM usuarios 
        WHERE Puntuacion <> 0 ORDER BY Puntuacion ASC  LIMIT 10");

        while ($usuarios = $consulta->fetch_assoc()){

            $this->rankingUsuarios[] = $usuarios; 
        }

        $consulta-> free_result();
        $this->db ->close();

        return $this ->rankingUsuarios;

    }

    public function get_allUsuarios(){
        $consulta = $this->db->query("SELECT NombreUsuario, Puntuacion FROM usuarios ORDER BY Puntuacion ASC");

        while ($usuarios = $consulta->fetch_assoc()){

            $this->allUsuarios[] = $usuarios; 
        }

        $consulta-> free_result();
        $this->db ->close();

        return $this ->allUsuarios;

    }




}