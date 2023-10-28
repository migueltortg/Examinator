<?php 
    include "entities/Respuesta.php";

    function arrayObjetosRespuestas($pregunta){
        $objetosRespuestas = [];

        $respuestasArray = json_decode($pregunta->get_respuestasJSON(), true);
        foreach ($respuestasArray as $respuesta) {
            $objetoRespuesta = new Respuesta($respuesta['valor'], $respuesta['enunciado']);
            $objetosRespuestas[$objetoRespuesta->get_valor()] = $objetoRespuesta;
        }
        
        return $objetosRespuestas;
    }
?>