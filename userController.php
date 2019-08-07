<?php
require 'user.php';


    



    function showAllUsers(){
        
        $usuarios = new User();
        return $result= $usuarios->getAll();

        //header('Location: index.php');


    }


    
    if(!empty($_POST)){
            $obj = new User();
            $name=$_POST['name'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $obj->insert($name,$email,$password);

            header('Location:index.php');
    }

    
    

