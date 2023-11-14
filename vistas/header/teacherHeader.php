<div id="menuOptions">
    <ul>
        <li><a href="?menu=inicio&&mainProfesor=ListaExamenes">Lista Examenes</a></li>
        <li><a href="?menu=inicio&&mainProfesor=CrearExamen">Crear Examen</a></li>
        <li><a href="?menu=inicio&&mainProfesor=CrearPregunta">Crear Pregunta</a></li>
    </ul>
</div>
<div id="user-container">
    <?php 
        echo "<p>".loginRep::pedirValorSession("user")->get_nombre()."</p>";
        include "cerrarSesion.php";
    ?>
</div>