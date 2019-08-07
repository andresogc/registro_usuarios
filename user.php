<?php
require_once 'database.php';
class User{

    private $id;
    private $name;
    private $email;
    private $password;
    

    
    function getAll(){
        $con=new Database;
        $sql="SELECT * FROM usuarios";
    
        $result = $con->connect()->query($sql);
        
        return  $result;
    }

    function insert($name,$email,$password){
        $con=new Database;
        $sql="INSERT INTO usuarios (id,name,email, password) VALUES(NULL,'$name','$email','$password')";

        $result = $con->connect()->query($sql);
        
        if($result){echo "registrado";}

        

    }

}
