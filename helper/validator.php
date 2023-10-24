<?php 
    class Validator {
        // Propiedades
        private $errores=array();
      
        // Getters y Setters
        function get_errores() {
          return $this->errores;
        }

        //Funciones
        function rango($clave,$valor,$min,$max){
            if($valor>=$min && $valor<=$max){
                return true;
            }else{
                $this->errores[$clave]=$clave . " fuera de rango.";
                return false;
            }
        }
    }
?>