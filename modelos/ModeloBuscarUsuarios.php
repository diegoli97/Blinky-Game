<?php

class ModeloBuscarUsuarios{

    private $db;
    private $usuarioBuscado;
    private $usuariosEncontrados;

    public function __construct($usuarioBuscadoSubmit){

        require_once("Conexion.php");

        $this->db = Conexion::conexion();
        $this->usuarioBuscado=$usuarioBuscadoSubmit;
        $this->usuariosEncontrados = array();


    }

    //Recoge el nombre indicado y lo busca entre todos los usuarios, seleccionando también los que lo contengan
    public function get_usuariosEncontrados(){

        $query = "SELECT NombreUsuario, Puntuacion FROM usuarios WHERE NombreUsuario LIKE '".$this->usuarioBuscado."%'";
        $consulta = $this->db->query($query);

        while ($usuarios = $consulta->fetch_assoc()){

            $this->usuariosEncontrados[] = $usuarios; 
        }

        $consulta-> free_result();
        $this->db ->close();

        return $this ->usuariosEncontrados;

    }




}