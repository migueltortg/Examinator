<article class="container">
        <div class="title">
            <h3>Mis examenes</h3>
        </div>
        <div class="exam-container">
            <?php 
                //CARGAR DIV CON CLASS EXAMEN
                $conexion=new DB();
                $conexion->conectar();
                examenRep::cargarExamenes($conexion->getConexion());
            ?>
            <!-- <div class="exam">
                <div class="exam-title">
                    <h2>Titulo</h2>
                    <h4>Dificultad - Categoria</h4>
                </div>
                <div class="exam-btns">
                    <input type="button" value="Hacerlo" id="idExamen">
                </div>
            </div>
            <div class="exam">
                <div class="exam-title">
                    <h2>Titulo</h2>
                    <h4>Fecha Creacion</h4>
                </div>
                <div class="exam-btns">
                    <input type="button" value="Hacerlo">
                </div>
            </div> -->
        </div>
</article>