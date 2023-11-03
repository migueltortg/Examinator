<?php 
    class preguntaRep{
        public static function crearPregunta($id,$enunciado,$respuestas,$categoria,$dificultad,$recurso){
            $arrayRespuestas=json_decode($respuestas);
            $pregunta=new Pregunta($id,$enunciado,$categoria,$dificultad,$recurso);
    
            foreach ($arrayRespuestas as $respuesta) {
                $pregunta->set_Respuestas(respuestaRep::crearRespuesta($respuesta->IdRespuesta,$respuesta->ValorRespuesta,$respuesta->Enunciado));
            }
    
            return $pregunta;
        }
    
        public static function introducirPregunta($conexion,$id,$enunciado,$respuestas,$categoria,$dificultad,$recurso){
            $pregunta=preguntaRep::crearPregunta($id,$enunciado,$respuestas,$categoria,$dificultad,$recurso);
            databaseRep::añadirPregunta($conexion,$pregunta);
        }
    
        public static function eliminarPregunta($conexion,$pregunta){
            databaseRep::borrarPreguntaDB($conexion,$pregunta);
        }

        public static function arrayPregunta($array){
            $arrayPregunta=array();
            foreach ($array as $objeto) {
                array_push($arrayPregunta,preguntaRep::crearPregunta($objeto->IdPregunta,$objeto->Enunciado,$objeto->Respuestas,
                $objeto->Categoria,$objeto->Dificultad,$objeto->Tipo_recurso));
            }
            return $arrayPregunta;
        }
    }
?>