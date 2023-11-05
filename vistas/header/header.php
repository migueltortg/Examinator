<header>
    <div id="header-container">
        <div id="icon-container">
            <img src="css/img/icono.png" alt="" width="40px" height="40px">
        </div>
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
        <div id="user-container">
            <?php 
                echo "<p>".$_GET["name"]."</p>";
            ?>
        </div>
    </div>
</header>