<?php 
    require_once "../helper/autocargador.php";
    loginRep::inicioSesion();

    $datos_json = file_get_contents('php://input');//Se recibe la informacion de la api con esto
    $prueba = json_decode($datos_json, true);
    
    $conexion=new DB();
    $conexion->conectar();

    $preguntas=databaseRep::preguntasExamenID($conexion->getConexion(),$prueba['idExamen']);
    echo json_encode($preguntas);
?>