<?php 
    if(isset($_POST["iniciarSesion"])){
        //Comprobar credenciales
        if(true==false){
            //CREAR CONEXION Y PASAR
        }else{
            require_once "vistas/login.php";
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