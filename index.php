<?php 
    require_once 'helper/autocargador.php';    

    $conexion=new DB();
    $conexion->conectar();
    
    //introducirUsuario($conexion->getConexion(),"Miguel","1234","Admin");
    //eliminarUsuario($conexion->getConexion(),$user);
    //$user=new User(null,"Miguel Angel","4321","Admin");
    //modificarUsuario($conexion->getConexion(),1,$user);
    //selectUniversal($conexion->getConexion(),"User")[0]->get_Nombre();

    // $pregunta=new Pregunta(2,"Es posiblee..","Señales","Dificil",null);
    // $respuesta1=respuestaRep::crearRespuesta(1,"A","No puedes si...");
    // $respuesta2=respuestaRep::crearRespuesta(2,"B","Nunca");
    // $respuesta2=respuestaRep::crearRespuesta(3,"C","Siempre");
    
    // respuestaRep::asignarRespuesta($pregunta,$respuesta1);
    // respuestaRep::asignarRespuesta($pregunta,$respuesta2);

    // preguntaRep::eliminarPregunta($conexion->getConexion(),$pregunta);
    // $pregunta->eliminarRespuesta($respuesta1);
    // //modificarRespuesta($pregunta,$respuesta2,$respuesta1);
    // echo $pregunta->get_RespuestasJSON();

    //var_dump(databaseRep::selectUniversal($conexion->getConexion(),"Pregunta"));

    // introducirPregunta($conexion->getConexion(),"2","Es posiblee..",'
    // [{"IdRespuesta":"1","ValorRespuesta":"A","Enunciado":"No puedes si..."},
    // {"IdRespuesta":"2","ValorRespuesta":"B","Enunciado":"Nunca"}
    // ,{"IdRespuesta":"3","ValorRespuesta":"C","Enunciado":"Siempre"}]',"Señales","Dificil",null) ;

    //introducirPregunta($conexion->getConexion(),);
    //examenRep::introducirExamen($conexion->getConexion(),1);
    //$examen=new Examen(null,null,2);
    //examenRep::eliminarExamen($conexion->getConexion(),$examen);
    //examenRep::modificarExamen($conexion->getConexion(),2,$examen);
    var_dump(databaseRep::selectUniversal($conexion->getConexion(),"User"));
    echo "HOLAAAA";
?>