<?php 
    class databaseRep{
        public static function añadirUsuario($conexion,$usuario){
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

        public static function añadirUsuarioPendiente($conexion,$usuario){
            $preparedConexion=$conexion->prepare("INSERT INTO User_pendiente(Nombre,Password)
            VALUES (:nombre,:password)");
    
            $nombre=$usuario->get_nombre();
            $password=$usuario->get_password();
    
            $preparedConexion->bindParam(':nombre',$nombre);
            $preparedConexion->bindParam(':password',$password);
    
            $preparedConexion->execute();
        }
    
        public static function añadirPregunta($conexion,$pregunta){
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

        public static function añadirExamen($conexion,$examen){
            $preparedConexion=$conexion->prepare("INSERT INTO EXAMEN(IdCreador) VALUES (:idCreador)");
    
            $idCreador=$examen->get_IdCreador();
    
    
            $preparedConexion->bindParam(':idCreador',$idCreador);
    
            $preparedConexion->execute();
        }
    
        public static function borrarUsuarioDB($conexion,$usuario){
            $preparedConexion=$conexion->prepare('DELETE FROM USER WHERE IdUser=:id AND Nombre=:nombre AND Password=:password AND Role=:role ;');
    
            $id= $usuario->get_Id();
            $nombre=$usuario->get_nombre();
            $password=$usuario->get_password();
            $role=$usuario->get_role();
    
            $preparedConexion->bindParam(':id',$id);
            $preparedConexion->bindParam(':nombre',$nombre);
            $preparedConexion->bindParam(':password',$password);
            $preparedConexion->bindParam(':role',$role);
            
            $preparedConexion->execute();
        }

        public static function borrarUsuarioID($conexion,$id){
            $preparedConexion=$conexion->prepare('DELETE FROM USER WHERE IdUser=:id;');
    
            $preparedConexion->bindParam(':id',$id);
            
            $preparedConexion->execute();
        }

        public static function borrarAlumnoExamenID($conexion,$id){
            $preparedConexion=$conexion->prepare('DELETE FROM Alumno_examen WHERE IdAlumno=:id;');
    
            $preparedConexion->bindParam(':id',$id);
            
            $preparedConexion->execute();
        }

        public static function borrarExamenDB($conexion,$examen){
            $preparedConexion=$conexion->prepare('DELETE FROM EXAMEN WHERE IDEXAMEN=:idExamen AND FECHA_HORA=:fecha_creacion AND IDCREADOR=:idCreador ;');
    
            $idExamen= $examen->get_Id();
            $fecha_creacion=$examen->get_FechaCreacion();
            $idCreador=$examen->get_IdCreador();
    
            $preparedConexion->bindParam(':idExamen',$idExamen);
            $preparedConexion->bindParam(':fecha_creacion',$fecha_creacion);
            $preparedConexion->bindParam(':idCreador',$idCreador);
            
            $preparedConexion->execute();
        }

        public static function borrarPreguntasExamen($conexion,$idExamen){
            $preparedConexion=$conexion->prepare('DELETE FROM examen_preguntas WHERE IDEXAMEN=:idExamen;');
    
            $preparedConexion->bindParam(':idExamen',$idExamen);
            
            $preparedConexion->execute();
        }

        public static function borrarExamenID($conexion,$idExamen){
            $preparedConexion=$conexion->prepare('DELETE FROM EXAMEN WHERE IDEXAMEN=:idExamen;');
    
            $preparedConexion->bindParam(':idExamen',$idExamen);
            
            $preparedConexion->execute();
        }

        public static function borrarPreguntaDB($conexion,$pregunta){
            $preparedConexion=$conexion->prepare('DELETE FROM PREGUNTA WHERE IdPregunta=:idPregunta AND Enunciado=:enunciado 
            AND Respuestas=:respuestas AND Categoria=:categoria AND Dificultad=:dificultad AND Tipo_Recurso=:tipo_recurso AND
            Recurso=:recurso ;');
    
            $idPregunta= $pregunta->get_Id();
            $enunciado=$pregunta->get_Enunciado();
            $respuestas=$pregunta->get_RespuestasJSON();
            $categoria=$pregunta->get_Categoria();
            $dificultad=$pregunta->get_Dificultad();
            $tipo_recurso=null;//CAMBIAR
            $recurso=null;//CAMBIAR

            $preparedConexion->bindParam(':idPregunta',$idPregunta);
            $preparedConexion->bindParam(':enunciado',$enunciado);
            $preparedConexion->bindParam(':respuestas',$respuestas);
            $preparedConexion->bindParam(':categoria',$categoria);
            $preparedConexion->bindParam(':dificultad',$dificultad);
            $preparedConexion->bindParam(':tipo_recurso',$tipo_recurso);
            $preparedConexion->bindParam(':recurso',$recurso);
            
            $preparedConexion->execute();
        }
    
        public static function modificarUsuarioDB($conexion,$id,$usuario){
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

        public static function modificarExamenDB($conexion,$idExamen,$examen){
            $preparedConexion=$conexion->prepare('UPDATE EXAMEN SET IdCreador=:idCreador WHERE IdExamen=:idExamen;');
    
            $idCreador=$examen->get_IdCreador();
    
            $preparedConexion->bindParam(':idCreador',$idCreador);
            $preparedConexion->bindParam(':idExamen',$idExamen);
            
            $preparedConexion->execute();
        }
    
        public static function selectUniversal($conexion,$tabla){
            $resultado = $conexion->query('SELECT * FROM '.$tabla.";", MYSQLI_USE_RESULT);
            $objetos=array();
            while ($registro = $resultado->fetch(PDO::FETCH_OBJ)) {
                array_push($objetos,$registro);
            }  
    
            switch ($tabla) {
                case "User":
                    return userRep::arrayUser($objetos);
                    break;
                case "Pregunta":
                    return preguntaRep::arrayPregunta($objetos);
                    break;
                case "Examen":
                    return examenRep::arrayExamen($objetos);
                    break;
                case "User_pendiente":
                    return userRep::arrayUserPendiente($objetos);
                    break;
                default:
                    return $objetos;
                    break;
            }
        }

        public static function selectExamenAsignado($conexion,$IdAlumno){
            $resultado = $conexion->query('SELECT * FROM Alumno_Examen WHERE IdAlumno='.$IdAlumno.';', MYSQLI_USE_RESULT);
            $objetos=array();
            
            while ($registro = $resultado->fetch(PDO::FETCH_OBJ)) {
                array_push($objetos,databaseRep::devolverExamenId($conexion,$registro->IdExamen));
            } 

            return $objetos;
        }

        public static function devolverExamenId($conexion,$Id){
            $resultado = $conexion->query('SELECT * FROM Examen WHERE IdUser='.$Id.';', MYSQLI_USE_RESULT);
            while ($registro = $resultado->fetch(PDO::FETCH_OBJ)) {
                return examenRep::crearExamen($registro->IdExamen,$registro->fecha_hora,$registro->IdCreador);
            } 
        }

        public static function devolverUserId($conexion,$Id){
            $resultado = $conexion->query('SELECT * FROM User WHERE IdUser='.$Id.';', MYSQLI_USE_RESULT);
            while ($registro = $resultado->fetch(PDO::FETCH_OBJ)) {
                return userRep::crearUsuario($registro->IdUser,$registro->Nombre,$registro->Password, $registro->Role);
            } 
        }

        public static function devolverUser($conexion,$nombre,$password){
            $sql = "SELECT * FROM USER WHERE Password=:password AND Nombre=:nombre;";
            $statement=$conexion->prepare($sql);
            $statement->bindParam(":nombre",$nombre);
            $statement->bindParam(":password",$password);
            $statement->execute();
            while ($registro = $statement->fetch(PDO::FETCH_OBJ)) {
                return userRep::crearUsuario($registro->IdUser,$registro->Nombre,$registro->Password,$registro->Role);
            } 
        }

        public static function asignarPreguntas($conexion,$dificultad,$categoria,$idExamen){
            $sql = "SELECT * FROM Pregunta WHERE upper(dificultad)=:dificultad AND upper(categoria)=:categoria;";
            $statement=$conexion->prepare($sql);

            $statement->bindParam(":dificultad",$dificultad);
            $statement->bindParam(":categoria",$categoria);
            $statement->execute();
            while ($registro = $statement->fetch(PDO::FETCH_OBJ)) {
                $pregunta=preguntaRep::crearPregunta($registro->IdPregunta,$registro->Enunciado,$registro->Respuestas,$registro->Categoria
                ,$registro->Dificultad,"null");
                databaseRep::enlazarPreguntaExamen($conexion,$pregunta,$idExamen);//NO AÑADIR ASIGNAR A LA ID EXAMEN DADA
            } 
        }

        public static function enlazarPreguntaExamen($conexion,$pregunta,$idExamen){
            $preparedConexion=$conexion->prepare("INSERT INTO examen_preguntas (IdExamen,IdPregunta)
            VALUES (:idExamen,:idPregunta)");
    
            $idPregunta=$pregunta->get_Id();
            $preparedConexion->bindParam(':idExamen',$idExamen);
            $preparedConexion->bindParam(':idPregunta',$idPregunta);
    
            $preparedConexion->execute();
        }

        public static function enlazarPreguntaExamenId($conexion,$idPregunta,$idExamen){
            $preparedConexion=$conexion->prepare("INSERT INTO examen_preguntas (IdExamen,IdPregunta)
            VALUES (:idExamen,:idPregunta)");
    
            $preparedConexion->bindParam(':idExamen',$idExamen);
            $preparedConexion->bindParam(':idPregunta',$idPregunta);
    
            $preparedConexion->execute();
        }

        public static function userAsignaExamen($conexion,$idUser,$idExamen){
            $preparedConexion=$conexion->prepare("INSERT INTO alumno_examen (IdAlumno,IdExamen)
            VALUES (:idAlumno,:idExamen)");
    
            $preparedConexion->bindParam(':idAlumno',$idUser);
            $preparedConexion->bindParam(':idExamen',$idExamen);
    
            $preparedConexion->execute();
        }

        public static function examenDevolverUlt($conexion,$examen){
            $sql = "SELECT * FROM examen WHERE idCreador = :idCreador ORDER BY idExamen DESC LIMIT 1;";
            $statement=$conexion->prepare($sql);

            $idCreador=$examen->get_IdCreador();

            $statement->bindParam(":idCreador",$idCreador);
            $statement->execute();

            while ($registro = $statement->fetch(PDO::FETCH_OBJ)) {
                return examenRep::crearExamen($registro->IdExamen,$registro->fecha_hora,$registro->IdCreador);
            } 
        }

        public static function devolverUserPendienteId($conexion,$Id){
            $resultado = $conexion->query('SELECT * FROM User_pendiente WHERE IdUser='.$Id.';', MYSQLI_USE_RESULT);
            while ($registro = $resultado->fetch(PDO::FETCH_OBJ)) {
                return userRep::crearUsuario("",$registro->Nombre,$registro->Password,"");
            } 
        }
        
        public static function borrarUsuarioPendienteDB($conexion,$id){
            $preparedConexion=$conexion->prepare('DELETE FROM User_pendiente WHERE IdUser=:id;');
    
            $preparedConexion->bindParam(':id',$id);
            
            $preparedConexion->execute();
        }

        
    }
    
?>