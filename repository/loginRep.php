<?php
    class loginRep{
        public static function logIn($user){
            loginRep::inicioSesion();
            loginRep::guardaSesion("user",$user);//Objeto tipo user.
        }

        public static function inicioSesion(){
            if(!loginRep::estaLogueado()){
                session_start();
            }
        }

        public static function guardaSesion($clave,$valor){
            $_SESSION[$clave]=$valor;
        }

        public static function pedirValorSession($clave){
            if(empty($clave)){
                return "";
            }else{
                return $_SESSION[$clave];
            }
        }

        public static function estaLogueado(){
            return isset($_SESSION['user']);
        }

        public static function destruirSession(){
            session_destroy();
        }
    }
?>