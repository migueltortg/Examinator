<?php 
    class intentoRep{
        public static function crearIntento($id,$idUser,$idExamen,$fecha_hora,$respuestas){
            $intento=new Intento($id,$idUser,$idExamen,$fecha_hora,$respuestas);
            return $intento;
        }
    
        public static function asignarIntento($conexion,$intento){
            //Funcion database insert intento
        }
    
        public static function arrayCategoria($array){
            $arrayIntento=array();
            foreach ($array as $objeto) {
                array_push($arrayIntento,intentoRep::crearIntento($objeto->IdIntento,$objeto->IdUser,$objeto->IdExamen,$objeto->fecha_hora,$objeto->respuestas));
            }
            return $arrayIntento;
        }
    }
?>