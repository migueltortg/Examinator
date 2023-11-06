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
                examenRep::cargarExamenes($conexion->getConexion());
            ?>
        </div>
</article>

<article class="container">
        <div class="title">
            <h3>Generar</h3>
        </div>
        <div class="generar-container">
            <form action="" method="post">
                <label for="dificultad">Dificultad</label>
                <select id="dificultad">
                    <option value="Fácil">Fácil</option>
                    <option value="Medio">Medio</option>
                    <option value="Difícil">Difícil</option>
                </select>
                <input type="submit" value="Generar" name="crearExamen" id="inputSubmit">
            </form>
        </div>
</article>