<main>
    <?php
        //COMPROBAR SI EXISTE SESSION
        if($_GET["rol"]=="noLogged"){
            require_once 'noLogged.php';
        }
        if($_GET['rol']== 'admin'){
            require_once 'adminHeader.php';
        }
        if($_GET['rol']== 'user'){
            require_once 'userHeader.php';
        }
        if($_GET['rol']== 'teacher'){
            require_once 'teacherHeader.php';
        }
    ?>
</main>