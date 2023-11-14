<?php 
    require_once "../helper/autocargador.php";

    $datos_json = file_get_contents('php://input');//Se recibe la informacion de la api con esto
    $prueba = json_decode($datos_json, true);
    
    $conexion=new DB();
    $conexion->conectar();

    $user=databaseRep::devolverUserId($conexion->getConexion(),$prueba['idUser']);
    $user->set_role(strtoupper($prueba['rol']));
    userRep::modificarUsuario($conexion->getConexion(),$prueba['idUser'],$user);
?>