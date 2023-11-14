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