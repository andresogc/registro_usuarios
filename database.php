<?php

class Database{
    private $servidor='localhost';
    private $usuario='root';
    private $contraseña='';
    private $db='registro_usuarios';

    function connect(){

        $con = mysqli_connect($this->servidor,$this->usuario,$this->contraseña,$this->db) or die("Fallo la conexion a la base de datos");
        
        if($con){
            echo "conexon exitosa a la db";
        }

        return $con;

    }


}