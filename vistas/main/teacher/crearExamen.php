<article class="container">
        <div class="title">
            <h3>Crear Examen</h3>
        </div>
        <div class="preguntas-container">
            <?php 
                //CARGAR PREGUNTAS
                $conexion=new DB();
                $conexion->conectar();

                preguntaRep::cargarPreguntas($conexion->getConexion());
            ?>
        </div>
        <div id="btnGenerar-container">
            <button onclick="generarExamen(this,event)">GENERAR EXAMEN</button>
        </div>
</article>
<script src="api/crearExamen.js"></script>