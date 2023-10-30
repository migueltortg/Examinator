<?php 
    require_once 'helper/autocargador.php';    

    $conexion=new DB();
    $conexion->conectar();

    //introducirUsuario($conexion->getConexion(),"Miguel","1234","Admin");
    //eliminarUsuario($conexion->getConexion(),$user);
    //$user=new User(null,"Miguel Angel","4321","Admin");
    //modificarUsuario($conexion->getConexion(),1,$user);
    //selectUniversal($conexion->getConexion(),"User")[0]->get_Nombre();

    // $pregunta=new Pregunta(2,"ggergergerg","Señales","Easy",null);
    // $respuesta1=crearRespuesta(1,"A","SI");
    // $respuesta2=crearRespuesta(2,"B","NO");
    
    // asignarRespuesta($pregunta,$respuesta1);
    // asignarRespuesta($pregunta,$respuesta2);

    // $pregunta->eliminarRespuesta($respuesta1);
    // //modificarRespuesta($pregunta,$respuesta2,$respuesta1);
    // echo $pregunta->get_RespuestasJSON();

    var_dump(databaseRep::selectUniversal($conexion->getConexion(),"Pregunta")[1]);

    // introducirPregunta($conexion->getConexion(),"2","Es posiblee..",'
    // [{"IdRespuesta":"1","ValorRespuesta":"A","Enunciado":"No puedes si..."},
    // {"IdRespuesta":"2","ValorRespuesta":"B","Enunciado":"Nunca"}
    // ,{"IdRespuesta":"3","ValorRespuesta":"C","Enunciado":"Siempre"}]',"Señales","Dificil",null) ;

    
?>