<?php
class Principal
{
    public static function main()
    {
        //require_once'./helper/sesion.php';
        require_once "helper/autocargador.php";
        require_once 'vistas/enrutador.php';
    }
}
Principal::main();
?>