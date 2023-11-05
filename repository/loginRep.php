<?php
    function logIn($nombre){
        inicioSesion();
        guardaSesion("user",$nombre);
    }

    function inicioSesion(){
        session_start();
    }

    function guardaSesion($clave,$valor){
        $_SESSION[$clave]=$valor;
    }

    function pedirValorSession($clave){
        if(empty($clave)){
            return "";
        }else{
            return $_SESSION[$clave];
        }
    }

    function estaLogueado(){
        return isset($_SESSION['user']);
    }

    function destruirSession(){
        session_destroy();
    }
?>