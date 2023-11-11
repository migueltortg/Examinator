<article class="container">
    <div class="title">
        <h3>Lista de Usuarios</h3>
    </div>

    <div class="user-container">
        <?php 
            $conexion=new DB();
            $conexion->conectar();
            userRep::cargarUsuarios($conexion->getConexion());
        ?>
    </div>
</article>