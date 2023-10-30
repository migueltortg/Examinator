<?php 
    function añadirUsuario($conexion,$usuario){
        $preparedConexion=$conexion->prepare("INSERT INTO User(Nombre,Password,Role)
        VALUES (:nombre,:password,:role)");

        $nombre=$usuario->get_nombre();
        $password=$usuario->get_password();
        $role=$usuario->get_role();

        $preparedConexion->bindParam(':nombre',$nombre);
        $preparedConexion->bindParam(':password',$password);
        $preparedConexion->bindParam(':role',$role);

        $preparedConexion->execute();
    }

    function añadirPregunta($conexion,$pregunta){
        $preparedConexion=$conexion->prepare("INSERT INTO PREGUNTA (ENUNCIADO,RESPUESTAS,CATEGORIA,DIFICULTAD,TIPO_RECURSO,RECURSO)
        VALUES (:enunciado,:respuestas,:categoria,:dificultad,:tipo_recurso,:recurso)");

        $enunciado=$pregunta->get_Enunciado();
        $respuestas=$pregunta->get_RespuestasJSON();
        $categoria=$pregunta->get_Categoria();
        $dificultad=$pregunta->get_Dificultad();
        $tipo_recurso=null;//CAMBIAR
        $recurso=null;//CAMBIAR


        $preparedConexion->bindParam(':enunciado',$enunciado);
        $preparedConexion->bindParam(':respuestas',$respuestas);
        $preparedConexion->bindParam(':categoria',$categoria);
        $preparedConexion->bindParam(':dificultad',$dificultad);
        $preparedConexion->bindParam(':tipo_recurso',$tipo_recurso);
        $preparedConexion->bindParam(':recurso',$recurso);

        $preparedConexion->execute();
    }

    function borrarUsuarioDB($conexion,$usuario){
        $preparedConexion=$conexion->prepare('DELETE FROM USER WHERE IdUser=:id AND Nombre=:nombre AND Password=:password AND Role=:role ;');

        $id= $usuario->get_Id();
        $nombre=$usuario->get_nombre();
        $password=$usuario->get_password();
        $role=$usuario->get_role();

        $preparedConexion->bindParam(':id',$id);
        $preparedConexion->bindParam(':nombre',$nombre);
        $preparedConexion->bindParam(':password',$password);
        $preparedConexion->bindParam(':role',$role);
        var_dump($preparedConexion);
        $preparedConexion->execute();
    }

    function modificarUsuarioDB($conexion,$id,$usuario){
        $preparedConexion=$conexion->prepare('UPDATE USER SET Nombre=:nombre,Password=:password,Role=:role WHERE IdUser=:id;');

        $nombre=$usuario->get_nombre();
        $password=$usuario->get_password();
        $role=$usuario->get_role();

        $preparedConexion->bindParam(':id',$id);
        $preparedConexion->bindParam(':nombre',$nombre);
        $preparedConexion->bindParam(':password',$password);
        $preparedConexion->bindParam(':role',$role);
        
        $preparedConexion->execute();
    }

    function selectUniversal($conexion,$tabla){
        $resultado = $conexion->query('SELECT * FROM '.$tabla.";", MYSQLI_USE_RESULT);
        $objetos=array();
        while ($registro = $resultado->fetch(PDO::FETCH_OBJ)) {
            array_push($objetos,$registro);
        }  

        switch ($tabla) {
            case "User":
                return arrayUser($objetos);
                break;
            case "Pregunta":
                return arrayPregunta($objetos);
                break;
        }
    }
?>