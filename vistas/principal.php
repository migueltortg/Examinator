<head>
    <meta charset="UTF-8">
    <title>Examinator</title>
    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header>
        <?php
            require_once 'header/header.php';
        ?>
    </header>
    <main>
        <?php
            //Dependiendo del rol
            require_once 'main/noLogged.php';
        ?>
    </main>
    <footer>

    </footer>
</body>