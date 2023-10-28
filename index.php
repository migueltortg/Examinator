<?php 
    include "repository/userRep.php";
    include "database/DB.php";

    $conexion=new DB();
    $conexion->conectar();

    //introducirUsuario($conexion->getConexion(),"Miguel","1234","Admin");
    //eliminarUsuario($conexion->getConexion(),$user);
    //$user=new User(null,"Miguel Angel","4321","Admin");
    //modificarUsuario($conexion->getConexion(),1,$user);
    //selectUniversal($conexion->getConexion(),"User")[0]->get_Nombre();
?>