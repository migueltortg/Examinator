<?php 
    class userRep{
        public static function crearUsuario($id,$nombre,$password,$role){
            $usuario=new User($id,$nombre,$password,$role);
            return $usuario;
        }
    
        public static function introducirUsuario($conexion,$nombre,$password,$role){
            $usuario=crearUsuario(null,$nombre,$password,$role);
            añadirUsuario($conexion,$usuario);
        }
    
        public static function eliminarUsuario($conexion,$usuario){
            borrarUsuarioDB($conexion,$usuario);
        }
    
        public static function modificarUsuario($conexion,$id,$usuario){
            modificarUsuarioDB($conexion,$id,$usuario);
        }
    
        public static function arrayUser($array){
            $arrayUser=array();
            foreach ($array as $objeto) {
                array_push($arrayUser,crearUsuario($objeto->IdUser,$objeto->Nombre,$objeto->Password,$objeto->Role));
            }
            return $arrayUser;
        }
    }
?>