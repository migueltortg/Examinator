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
            <h3>Generar Examen</h3>
        </div>
        <div class="generar-container">
            <div>
                <label for="dificultad">Dificultad</label>
                <select id="dificultad">
                    <!-- HACER SELECT QUE CARGUE TABLA DIFICULTAD -->
                    <option value="Fácil">Fácil</option>
                    <option value="Medio">Medio</option>
                    <option value="Difícil">Difícil</option>
                </select>
            </div>
            <div>
                <label for="categoria">Categoria</label>
                <select id="categoria">
                    <!-- HACER SELECT QUE CARGUE TABLA CATEGORIA -->
                    <option value="MECÁNICA">Mecánica</option>
                    <option value="SEÑALES">Señales</option>
                    <option value="UsoVia">Uso de la via</option>
                </select>
            </div>
            <div>
                <button id="generarExamenTeacher">Generar</button>
            </div>
        </div>
</article>
<script src="api/generarExamenTeacher.js"></script>