<?php 
    require_once "../helper/autocargador.php";

    $datos_json = file_get_contents('php://input');//Se recibe la informacion de la api con esto
    $prueba = json_decode($datos_json, true);
    
    $conexion=new DB();
    $conexion->conectar();

    databaseRep::borrarPreguntasExamen($conexion->getConexion(),$prueba['idExamen']);
    databaseRep::borrarExamenID($conexion->getConexion(),$prueba['idExamen']);
?>