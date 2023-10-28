<?php 
    include "helper/validator.php";
    include "entities/Pregunta.php";

    $obj=new Pregunta(1,"fwefw4f",'[{"valor": "a", "enunciado": "weffewfwef"},{"valor": "b", "enunciado": "waaaaaewfwef"},{"valor": "c", "enunciado": "weffewennnnnnf"}]',"ffewf","wfreferwferg","frefefewf");
    $obj->get_RespuestasObj();
?>