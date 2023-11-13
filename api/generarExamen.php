<?php 
    require_once "../helper/autocargador.php";
    loginRep::inicioSesion();

    $datos_json = file_get_contents('php://input');//Se recibe la informacion de la api con esto
    $prueba = json_decode($datos_json, true);
    
    $conexion=new DB();
    $conexion->conectar();
    $examen=examenRep::crearExamen(null,null,$_SESSION['user']->get_Id());

    //ASIGNAR PREGUNTAS
    databaseRep::añadirExamen($conexion->getConexion(),$examen);
    $examen=databaseRep::examenDevolverUlt($conexion->getConexion(),$examen);
    databaseRep::asignarPreguntas($conexion->getConexion(),$prueba['dificultad'],$prueba['categoria'],$examen->get_Id());
    databaseRep::userAsignaExamen($conexion->getConexion(),$_SESSION['user']->get_Id(),$examen->get_Id())
?>