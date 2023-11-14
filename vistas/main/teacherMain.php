<article class="container">
        <div class="title">
            <h3>Asignar Examen</h3>
        </div>
        <div class="asignar-container">
            <div>
                <label for="usuarioSelect">Usuario</label>
                <select id="usuarioSelect"><!-- SELECT CON USUARIOS -->
                    <?php 
                        //CARGAR SELECT USUARIOS
                        $conexion=new DB();
                        $conexion->conectar();

                        $array=databaseRep::selectUniversal($conexion->getConexion(),"User");
                        foreach ($array as $user) { 
                            // Use actual user data for option value and text
                            echo "<option value='" . $user->get_Id() . "'>" . $user->get_nombre() . "</option>";
                        }
                    ?>
                </select>
            </div>
            <div>
                <label for="examenSelect">Examen</label>
                <select id="examenSelect"><!-- SELECT CON EXAMENES -->
                    <?php 
                        //CARGAR SELECT USUARIOS
                        $conexion=new DB();
                        $conexion->conectar();

                        $array=databaseRep::selectUniversal($conexion->getConexion(),"Examen");
                        foreach ($array as $examen) { 
                            // Use actual user data for option value and text
                            echo "<option value='" . $examen->get_Id() . "'> Examen: " . $examen->get_Id() . "</option>";
                        }
                    ?>
                </select>
            </div>
            <div>
                <button id="asignarExamen">Asignar</button>
            </div>
        </div>
</article>
<script src="api/asignarExamen.js"></script>

<article class="container">
        <div class="title">
            <h3>Examen Preguntas Aleatorias</h3>
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
                <button id="generarExamenTeacher">Generar</button>
            </div>
        </div>
</article>
<script src="api/generarExamenTeacher.js"></script>

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
