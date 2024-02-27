<?php

class ModeloLogin{

    private $db;

    public function __construct(){

        require_once("Conexion.php");

        $this->db = Conexion::conexion();


    }

    //Recoge el nombre indicado y lo busca entre todos los usuarios, seleccionando también los que lo contengan
    public function get_loginCorrecto($usuario,$password){

        $queryBuscarUsuario = "SELECT NombreUsuario FROM usuarios WHERE NombreUsuario="."'".$usuario."'";
        $consulta = $this->db->query($queryBuscarUsuario);

        if($consulta==null){ 

            $consulta-> free_result();
            $this->db ->close();         
            return false;

        }else{
            $queryPassword = "SELECT Password FROM usuarios WHERE NombreUsuario="."'".$usuario."'";
            $resultado =$this->db->query($queryPassword);
            $consultaPass = $resultado->fetch_array()[0];
            
            if($consultaPass==$password){
                
                $consulta-> free_result();
                $resultado->free_result();
                $this->db ->close();

                return true;
            }
            
            return false;
        }     

    }




}