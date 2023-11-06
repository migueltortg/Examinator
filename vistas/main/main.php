<main>
    <?php
        loginRep::inicioSesion();
        //COMPROBAR SI EXISTE SESSION
        if(!loginRep::estaLogueado()){
            require_once 'noLogged.php';
        }

        switch (strtoupper(loginRep::pedirValorSession("user")->get_role())) {
            case "ADMIN":
                require_once 'adminMain.php';
                break;
            case "USER":
                require_once 'userMain.php';
                break;
            case "TEACHER":
                require_once 'teacherMain.php';
                break;
        }
    ?>
</main>