<article class="container">
    <div class="title">
        <h3>Lista de Examenes</h3>
    </div>

    <div class="exam-container">
        <?php 
            $conexion=new DB();
            $conexion->conectar();
            examenRep::cargarExamen($conexion->getConexion());
        ?>
    </div>
</article>