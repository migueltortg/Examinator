<?php
if (isset($_GET['menu'])) {
    if ($_GET['menu'] == "inicio") {
        require_once 'vistas/principal.php';
        //Mostramos el header.
        require_once "header/header.php";

        //Mostramos el main correspondiente.
        if($_GET['rol'] == "noLogged"){
            require_once "main/noLogged.php";
        }
        if($_GET["rol"] == "admin"){
            require_once "main/admin.php";
        }
        if($_GET["rol"] == "teacher"){
            require_once "main/teacher.php";
        }
        if($_GET["rol"] == "user"){
            require_once "main/user.php";
        }
    }
    if ($_GET['menu'] == "login") {
        require_once 'vistas/login.php';
    }  
}
?>