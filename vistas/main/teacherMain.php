<?php 
    if(!isset($_GET['mainProfesor'])){
        require_once "vistas/main/teacher/mainProfesorPrincipal.php";
    }else if($_GET['mainProfesor']=="ListaExamenes"){
        require_once "vistas/main/teacher/listaExamenes.php";
    }else if($_GET["mainProfesor"]== "CrearExamen"){
        require_once "vistas/main/teacher/crearExamen.php";
    }else if($_GET["mainProfesor"]== "CrearPregunta"){
        require_once "vistas/main/teacher/crearPregunta.php";
    }   
?>
