<?php 
    //AL PULSAR BOTON TARARA
    if(isset($_POST["cerrarSesion"])){
        loginRep::inicioSesion();
        loginRep::destruirSession();
        header("Location: ?menu=inicio");
    }
?>

<form action="" id="cerrarSesion" method="post">
    <input type="submit" name="cerrarSesion" value="cerrarSesion">
</div>