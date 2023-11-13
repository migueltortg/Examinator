<?php
    class registroRep{
        public static function userPendiente($conexion,$nombre,$password){
            $usuario=userRep::crearUsuario(null,$nombre,$password,"");
            databaseRep::añadirUsuarioPendiente($conexion,$usuario);
        }
    }
?>