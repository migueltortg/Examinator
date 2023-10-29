<?php 
    function crearPregunta($id,$nombre,$password,$role){
        $usuario=new User($id,$nombre,$password,$role);
        return $usuario;
    }
?>