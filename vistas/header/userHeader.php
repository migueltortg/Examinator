<div id="menuOptions">
    <ul>
        <li><a href="https://www.google.es">Mis Examenes</a></li>
        <li><a href="https://www.google.es">Generar</a></li>
        <li><a href="https://www.google.es">Intentos</a></li>
    </ul>
</div>
<div id="user-container">
    <?php 
        echo "<p>".loginRep::pedirValorSession("user")->get_nombre()."</p>";
    ?>
</div>