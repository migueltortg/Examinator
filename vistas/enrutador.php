<?php
if (isset($_GET['menu'])) {
    if ($_GET['menu'] == "inicio") {
        require_once 'vistas/principal.php';
        
        //Mostramos el header.
        require_once "header/header.php";

        //Mostramos el main correspondiente.
        require_once "main/main.php";
    }
    if ($_GET['menu'] == "login") {
        require_once 'vistas/login.php';
    }  
}
?>