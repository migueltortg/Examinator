<?php 
    class userRep{
        public static function crearUsuario($id,$nombre,$password,$role){
            $usuario=new User($id,$nombre,$password,$role);
            return $usuario;
        }
    
        public static function introducirUsuario($conexion,$nombre,$password,$role){
            $usuario=userRep::crearUsuario(null,$nombre,$password,$role);
            databaseRep::añadirUsuario($conexion,$usuario);
        }
    
        public static function eliminarUsuario($conexion,$usuario){
            databaseRep::borrarUsuarioDB($conexion,$usuario);
        }
    
        public static function modificarUsuario($conexion,$id,$usuario){
            databaseRep::modificarUsuarioDB($conexion,$id,$usuario);
        }
    
        public static function arrayUser($array){
            $arrayUser=array();
            foreach ($array as $objeto) {
                array_push($arrayUser,userRep::crearUsuario($objeto->IdUser,$objeto->Nombre,$objeto->Password,$objeto->Role));
            }
            return $arrayUser;
        }

        public static function arrayUserPendiente($array){
            $arrayUser=array();
            foreach ($array as $objeto) {
                array_push($arrayUser,userRep::crearUsuario($objeto->IdUser,$objeto->Nombre,$objeto->Password,""));
            }
            return $arrayUser;
        }

        public static function cargarUsuarios($conexion){
            $usuarios = databaseRep::selectUniversal($conexion, "User");//Esto develve una array de Users
        
            foreach ($usuarios as $user) {//Esto es para elegir en que opcion empezara el select
                $admin = "";
                $teacher = "";
                $usuario = "";
        
                switch (strtoupper($user->get_role())) {
                    case "ADMIN":
                        $admin = "selected";
                        break;
                    case "TEACHER":
                        $teacher = "selected";
                        break;
                    case "USER":
                        $usuario = "selected";
                        break;
                }
                //Echo para crear los distintos divs
                echo "
                <div class='user' id=".$user->get_Id().">
                    <div class='user-title'>
                        <h2>".$user->get_Nombre()."</h2>
                    </div>
                    <div>
                        <select class='dificultad'>
                            <option " . $usuario . " value='User'>Usuario</option>
                            <option " . $teacher . " value='Profesor'>Profesor</option>
                            <option " . $admin . " value='Administrador'>Administrador</option>
                        </select>
                    </div>
                    <div>
                        <button class='modificarRol'>Modificar</button>
                        <button class='borrarUser'>Borrar</button>
                    </div>
                </div>";
            }
            echo "
            <script src='api/modificarRol.js'></script>
            <script src='api/borrarUser.js'></script>";
        }

        public static function cargarUsuariosPendientes($conexion){
            $usuariosPendientes = databaseRep::selectUniversal($conexion, "User_pendiente");//Esto develve una array de Users
        
            foreach ($usuariosPendientes as $user) {//Esto es para elegir en que opcion empezara el select
                
            //Echo para crear los distintos divs
            echo "
            <div class='user-pendiente' id=".$user->get_Id().">
                    <div class='user-title'>
                        <h2>".$user->get_Nombre()."</h2>
                    </div>
                    <div class='rol-container'>
                        <select class='rol'>                                
                            <option selected value='USER'>Usuario</option>
                            <option value='TEACHER'>Profesor</option>
                            <option value='ADMIN'>Administrador</option>
                        </select>
                    </div>
                    <div class='btnsRechazarAceptar'>
                        <button class='btnAceptar' onclick='aceptar(this)'>Aceptar</button>
                        <button class='btnRechazar' onclick='rechazar(this)'>Rechazar</button>
                    </div>
                </div>";
            }
        }
    }
?>