<?php 
    require_once "../helper/autocargador.php";
    $datos_json = file_get_contents('php://input');//Se recibe la informacion de la api con esto
    $prueba = json_decode($datos_json, true);
    
    //ACEPTAR USER
    $conexion=new DB();
    $conexion->conectar();
    $user=databaseRep::devolverUserPendienteId($conexion->getConexion(),$prueba['idUser']);
    $user->set_role($prueba['rol']);
    databaseRep::añadirUsuario($conexion->getConexion(),$user);
    
    //BORRAR USUARIO PENDIENTE CON ESA ID
    databaseRep::borrarUsuarioPendienteDB($conexion->getConexion(),$prueba['idUser']);
?>