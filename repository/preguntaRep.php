<?php 
    function crearPregunta($id,$enunciado,$respuestas,$categoria,$dificultad,$recurso){
        $arrayRespuestas=json_decode($respuestas);
        $pregunta=new Pregunta($id,$enunciado,$categoria,$dificultad,$recurso);

        foreach ($arrayRespuestas as $respuesta) {
            $pregunta->set_Respuestas(crearRespuesta($respuesta->IdRespuesta,$respuesta->ValorRespuesta,$respuesta->Enunciado));
        }

        return $pregunta;
    }

    function introducirPregunta($conexion,$id,$enunciado,$respuestas,$categoria,$dificultad,$recurso){
        $pregunta=crearPregunta($id,$enunciado,$respuestas,$categoria,$dificultad,$recurso);
        añadirPregunta($conexion,$pregunta);
    }

    function arrayPregunta($array){
        $arrayPregunta=array();
        foreach ($array as $objeto) {
            array_push($arrayPregunta,crearPregunta($objeto->IdPregunta,$objeto->Enunciado,$objeto->Respuestas,
            $objeto->Categoria,$objeto->Dificultad,$objeto->Tipo_recurso));
        }
        return $arrayPregunta;
    }
?>