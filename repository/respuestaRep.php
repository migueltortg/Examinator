<?php 
    function crearRespuesta($id,$valor,$enunciado){
        $respuesta=new Respuesta($id,$valor,$enunciado);
        return $respuesta;
    }

    function asignarRespuesta($pregunta,$respuesta){
        $pregunta->set_Respuestas($respuesta); 
    }

    function eliminarRespuesta($pregunta,$respuesta){
        $pregunta->eliminarRespuesta($respuesta);
    }

    function modificarRespuesta($pregunta,$respuestaAntigua,$respuestaNueva){
        eliminarRespuesta($pregunta,$respuestaAntigua);
        asignarRespuesta($pregunta,$respuestaNueva);
    }
?>