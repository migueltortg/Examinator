<div id="menuOptions">
    <ul>
        <li><a href="https://www.google.es">Lista Usuarios</a></li>
        <li><a href="https://www.google.es">Solicitudes</a></li>
    </ul>
</div>
<div id="user-container">
    <?php 
        echo "<p>".loginRep::pedirValorSession("user")->get_nombre()."</p>";
        include "cerrarSesion.php";
    ?>
</div>