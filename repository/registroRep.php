<?php
    class registroRep{
        public static function userPendiente($conexion,$nombre,$password,$role){
            $usuario=userRep::crearUsuario(null,$nombre,$password,$role);
            databaseRep::añadirUsuarioPendiente($conexion,$usuario);
        }
    }
?>