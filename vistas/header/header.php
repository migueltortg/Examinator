<header>
    <div id="header-container">
        <div id="icon-container">
            <a href="?menu=inicio"><img src="css/img/icono.png" alt="" width="40px" height="40px"></a>
        </div>
        <?php
            loginRep::inicioSesion();
            //COMPROBAR SI EXISTE SESSION
            if(!loginRep::estaLogueado()){
                require_once 'noLogged.php';
            }else{
                switch (strtoupper(loginRep::pedirValorSession("user")->get_role())) {
                case "ADMIN":
                    require_once 'adminHeader.php';
                    break;
                case "USER":
                    require_once 'userHeader.php';
                    break;
                case "TEACHER":
                    require_once 'teacherHeader.php';
                    break;
                }
            }
        ?>
    </div>
</header>