<?php 
    require_once "../helper/autocargador.php";

    $datos_json = file_get_contents('php://input');//Se recibe la informacion de la api con esto
    $prueba = json_decode($datos_json, true);
    
    $conexion=new DB();
    $conexion->conectar();

    $arrayPreguntas=array();
    for($i=0;$i<3;$i++){
        $letra="";
        $correcta=false;
        if($i==0){
            $letra= "A";
        }else if($i== 1){
            $letra= "B";
        }else if($i== 2){
            $letra= "C";
        }
        if($prueba['respuestaCorrecta']==$i+1){
            $correcta=true;
        }

        array_push($arrayPreguntas,respuestaRep::crearRespuesta($i+1,$letra,$prueba['respuesta'][$i],$correcta));
    }



    $jsonRespuesta=json_encode($arrayPreguntas);

    preguntaRep::introducirPregunta($conexion->getConexion(),"",$prueba['enunciado'],$jsonRespuesta,$prueba['categoria'],$prueba['dificultad'],null);
?>