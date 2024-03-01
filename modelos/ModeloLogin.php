<?php

class ModeloLogin{

    private $db;

    public function __construct(){

        require_once("Conexion.php");

        $this->db = Conexion::conexion();


    }

    //Recoge el nombre indicado y lo busca entre todos los usuarios, si existe compara la contraseña dada
    public function get_loginCorrecto($usuario,$password){

        $usuario = trim($usuario);
        $password = trim($password);

        if(is_null($usuario) || is_null($password)){
            $this->db ->close();         
            return false;
        }else{

        $queryBuscarUsuario = "SELECT NombreUsuario FROM usuarios WHERE NombreUsuario="."'".$usuario."'";
        $resultado = $this->db->query($queryBuscarUsuario);

        if(($resultado->num_rows)==0){ 

            $resultado-> free_result();
            $this->db ->close();         
            return false;

        }else{
            $queryPassword = "SELECT Password FROM usuarios WHERE NombreUsuario="."'".$usuario."'";
            $resultado =$this->db->query($queryPassword);
            $consultaPass = $resultado->fetch_array()[0];
            
            if($consultaPass==$password){
                
                $resultado->free_result();
                $this->db ->close();

                return true;
            }

            $resultado->free_result();
            $this->db ->close();
            
            return false;
            }

        }     

    }




}