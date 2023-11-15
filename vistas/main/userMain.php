<?php 
    $conexion=new DB();
    $conexion->conectar();
    if(isset($_POST['crearExamen']) && $_POST['crearExamen']=="Generar"){
        examenRep::introducirExamen($conexion->getConexion(),"1");
        $_POST['crearExamen']=null;
    }
?>
<article class="container">
        <div class="title">
            <h3>Mis examenes</h3>
        </div>
        <div class="exam-container">
            <?php 
                //CARGAR DIV CON CLASS EXAMEN
                examenRep::cargarExamenesAsig($conexion->getConexion());
            ?>
        </div>
</article>
<script src="api/Examen.js"></script>

<article class="container">
        <div class="title">
            <h3>Generar Examen</h3>
        </div>
        <div class="generar-container">
            <div>
                <label for="dificultad">Dificultad</label>
                <select id="dificultad">
                    <?php 
                        //CARGAR SELECT DIFICULTD
                        $conexion=new DB();
                        $conexion->conectar();

                        $array=databaseRep::selectUniversal($conexion->getConexion(),"Dificultad");
                        foreach ($array as $dificultad) { 
                            // Use actual user data for option value and text
                            echo "<option value='" . $dificultad->Nombre . "'>" . $dificultad->Nombre . "</option>";
                        }
                    ?>
                </select>
            </div>
            <div>
                <label for="categoria">Categoria</label>
                <select id="categoria">
                    <!-- HACER SELECT QUE CARGUE TABLA CATEGORIA -->
                    <?php 
                        //CARGAR SELECT DIFICULTD
                        $conexion=new DB();
                        $conexion->conectar();

                        $array=databaseRep::selectUniversal($conexion->getConexion(),"Categoria");
                        foreach ($array as $categoria) { 
                            // Use actual user data for option value and text
                            echo "<option value='" . $categoria->Nombre . "'>" . $categoria->Nombre . "</option>";
                        }
                    ?>
                </select>
            </div>
            <div>
                <button id="generarExamen">Generar</button>
            </div>
        </div>
</article>
<script src="api/generarExamen.js"></script>