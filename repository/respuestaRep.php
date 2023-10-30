<?php 
    class respuestaRep{
        public static function crearRespuesta($id,$valor,$enunciado){
            $respuesta=new Respuesta($id,$valor,$enunciado);
            return $respuesta;
        }
    
        public static function asignarRespuesta($pregunta,$respuesta){
            $pregunta->set_Respuestas($respuesta); 
        }
    
        public static function eliminarRespuesta($pregunta,$respuesta){
            $pregunta->eliminarRespuesta($respuesta);
        }
    
        public static function modificarRespuesta($pregunta,$respuestaAntigua,$respuestaNueva){
            eliminarRespuesta($pregunta,$respuestaAntigua);
            databaseRep::asignarRespuesta($pregunta,$respuestaNueva);
        }
    }
?>