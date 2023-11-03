<?php 
    class userRep{
        public static function crearUsuario($id,$nombre,$password,$role){
            $usuario=new User($id,$nombre,$password,$role);
            return $usuario;
        }
    
        public static function introducirUsuario($conexion,$nombre,$password,$role){
            $usuario=userRep::crearUsuario(null,$nombre,$password,$role);
            databaseRep::añadirUsuario($conexion,$usuario);
        }
    
        public static function eliminarUsuario($conexion,$usuario){
            databaseRep::borrarUsuarioDB($conexion,$usuario);
        }
    
        public static function modificarUsuario($conexion,$id,$usuario){
            databaseRep::modificarUsuarioDB($conexion,$id,$usuario);
        }
    
        public static function arrayUser($array){
            $arrayUser=array();
            foreach ($array as $objeto) {
                array_push($arrayUser,userRep::crearUsuario($objeto->IdUser,$objeto->Nombre,$objeto->Password,$objeto->Role));
            }
            return $arrayUser;
        }
    }
?>