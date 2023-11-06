<?php 
    $conexion=new DB();
    $conexion->conectar();
    if(isset($_POST["iniciarSesion"])){
        //Comprobar credenciales
        $user=databaseRep::devolverUser($conexion->getConexion(),$_POST['nombre'],$_POST['contraseña']);
        if($user!=null){
            loginRep::logIn($user);
            //require_once 'vistas/enrutador.php';
            header("Location: http://localhost/Examinator/index.php?menu=inicio");
        }
    }
?>

<head>
    <title>Inicio de Sesion</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div id="container">
        <form action="" method="post">        
            <h1>Inicio de Sesión</h1>
            <div>
                <h3>Usuario</h3>
                <input type="text" name="nombre" id="inputNombre">
            </div>
            <div>
                <h3>Contraseña</h3>
                <input type="text" name="contraseña" id="inputContraseña">
            </div>
            <input type="submit" value="Acceder" name="iniciarSesion" id="inputSubmit">
            <a href="https://www.google.es">Registrate</a>
        </form>
    </div>
</body>