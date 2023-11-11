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

        public static function cargarUsuarios($conexion){
            $usuarios = databaseRep::selectUniversal($conexion, "User");
        
            foreach ($usuarios as $user) {
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
        
                echo "
                <div class='user'>
                    <div class='user-title'>
                        <h2>" . $user->get_Nombre() . "</h2>
                    </div>
                    <div>
                        <select class='dificultad'>
                            <option " . $usuario . " value='User'>User</option>
                            <option " . $teacher . " value='Profesor'>Profesor</option>
                            <option " . $admin . " value='Administrador'>Administrador</option>
                        </select>
                    </div>
                    <button id='usuarioEditar' onclick=''>Cambiar</button>
                </div>";
            }
        }
    }
?>