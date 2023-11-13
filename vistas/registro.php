<?php 
    $conexion=new DB();
    $conexion->conectar();
    if(isset($_POST["registro"])){
        //INSERT A TABLA
        if($_POST['contraseña']==$_POST['RepeatContraseña'] && $_POST['nombre']!="" && $_POST['contraseña']!=""){
            registroRep::userPendiente($conexion->getConexion(),$_POST['nombre'],$_POST['contraseña']);
            header("Location: http://localhost/Examinator/index.php?menu=inicio");
        }
    }
?>

<head>
    <title>Registro</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/registro.css">
</head>
<body>
    <div id="container">
        <form action="" method="post">        
            <h1>Registro</h1>
            <div>
                <h3>Usuario</h3>
                <input type="text" name="nombre" id="inputNombre">
            </div>
            <div>
                <h3>Contraseña</h3>
                <input type="text" name="contraseña" id="inputContraseña">
            </div>
            <div id="divRepeatPassword">
                <h3>Repetir Contraseña</h3>
                <input type="text" name="RepeatContraseña" id="inputRepeatContraseña">
            </div>
            <input type="submit" value="Acceder" name="registro" id="registro">
            <a href="?menu=login">LogIn</a>
        </form>
    </div>
</body>