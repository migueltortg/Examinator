<?php 
    require_once "../helper/autocargador.php";
    $datos_json = file_get_contents('php://input');//Se recibe la informacion de la api con esto
    $prueba = json_decode($datos_json, true);
    
    //ACEPTAR USER
    $conexion=new DB();
    $conexion->conectar();
    
    //BORRAR USUARIO PENDIENTE CON ESA ID
    databaseRep::borrarUsuarioPendienteDB($conexion->getConexion(),$prueba['idUser']);
?>