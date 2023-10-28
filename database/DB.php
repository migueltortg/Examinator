<?php 
    class DB {
        private $conexion=null;
            
        function conectar(){
            if($this->conexion==null){
                $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
                $this->conexion=new PDO('mysql:host=localhost;dbname=examinator', 'root', '',$opciones);;
            }
        }

        function desconectar(){
            $this->conexion=null;
        }

        function getConexion(){
            return $this->conexion;
        }
    }
?>