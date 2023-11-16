<?php 
    class recursoRep{
        public static function crearRecurso($tipo_recurso,$url){
            $recurso=new Recurso($tipo_recurso,$url);
            return $recurso;
        }
    }
?>