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

<article class="container">
        <div class="title">
            <h3>Usuarios Pendientes</h3>
        </div>
        <div class="userPendiente-container">
            <?php
                $conexion=new DB();
                $conexion->conectar();
                userRep::cargarUsuariosPendientes($conexion->getConexion());
            ?>
        </div>
</article>