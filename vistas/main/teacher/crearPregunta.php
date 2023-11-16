<article class="container">
    <div class="title">
        <h3>Crear Pregunta</h3>
    </div>
    <div id="crearPregunta">
        <div id="enunciadoPregunta">
            <h4>Enunciado:</h4>
            <input type="text" id="inputEnunciado">
        </div>
        <div id="respuestasPregunta">
            <div>
                <h4>Respuesta 1</h4>
                <input type="text" id="inputRespuesta1">
            </div>
            <div>
                <h4>Respuesta 2</h4>
                <input type="text" id="inputRespuesta2">
            </div>
            <div>
                <h4>Respuesta 3</h4>
                <input type="text" id="inputRespuesta3">
            </div>
        </div>
        <div id="categoriaPregunta">
            <label for="categoria">Categoria:</label>
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
        <div id="dificultadPregunta">
            <label for="dificultad">Dificultad:</label>
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
        <div id="correctaPregunta">
            <label for="correcta">Respuesta Correcta:</label>
            <select id="correcta">
                <option value="1">Respuesta 1</option>
                <option value="2">Respuesta 2</option>
                <option value="3">Respuesta 3</option>
            </select>
        </div>
        <div id="recursoPregunta">
            <div id="recursoInput">    
                <input type="file">
            </div>
            <div id="tipoRecurso">
                <h3>Tipo de Archivo:</h3>
                <div class="opcRecurso">
                    <input type="radio" value="IMAGEN" name="tipoRecurso">
                    <h4>Imagen</h4>
                </div>
                <div class="opcRecurso">
                    <input type="radio" value="VIDEO" name="tipoRecurso">
                    <h4>Video</h4>
                </div>
            </div>
        </div>
        <div id="btn-container">
            <button onclick="crearPregunta(this,event)">Crear Pregunta</button>
        </div>
    </div>
</article>
<script src="api/crearPregunta.js"></script>