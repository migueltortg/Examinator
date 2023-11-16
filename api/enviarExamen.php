<?php 
    require_once "../helper/autocargador.php";
    loginRep::inicioSesion();

    $datos_json = file_get_contents('php://input');//Se recibe la informacion de la api con esto
    $prueba = json_decode($datos_json, true);
    
    $conexion=new DB();
    $conexion->conectar();

    $intento=intentoRep::crearIntento("",$_SESSION['user']->get_Id(),$prueba['idExamen'],"",$prueba['respuestas']);
    databaseRep::añadirIntento($conexion->getConexion(),$intento);
?>