<?php 
    require_once "../helper/autocargador.php";
    loginRep::inicioSesion();

    $datos_json = file_get_contents('php://input');//Se recibe la informacion de la api con esto
    $prueba = json_decode($datos_json, true);
    
    $conexion=new DB();
    $conexion->conectar();

    $examen=examenRep::crearExamen(null,null,$_SESSION['user']->get_Id());
    databaseRep::añadirExamen($conexion->getConexion(),$examen);
    $examen=databaseRep::examenDevolverUlt($conexion->getConexion(),$examen);

    foreach($prueba['idPreguntas'] as $pregunta){
        databaseRep::enlazarPreguntaExamenId($conexion->getConexion(),$pregunta,$examen->get_Id());
    }
?>