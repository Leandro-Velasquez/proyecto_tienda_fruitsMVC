<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de administracion</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/proyecto_tienda_fruitsMVC/styles/styles.css">
</head>
<body>
    <header class="header-adm">
        <nav class="nav-adm">
            <p class="nav-adm__p">Panel de administracion</p>
            <button class="nav-adm__btn-menu btn-menu"><i class="nav-adm__i fas fa-bars"></i></button>
            <ul class="menu-adm menu">
                <li class="menu-adm__item"><a class="menu-adm__enlace" href="http://localhost/proyecto_tienda_fruitsMVC/PanelAdministracion">Inicio</a></li>
                <li class="menu-adm__item"><a class="menu-adm__enlace" href="http://localhost/proyecto_tienda_fruitsMVC/PanelAdministracion/administrarProductos">Administrar productos</a></li>
                <li class="menu-adm__item"><a class="menu-adm__enlace" href="modificar_testimonios.php">Modificar testimonios</a></li>
                <li class="menu-adm__item"><a class="menu-adm__enlace" href="administrar_noticias.php">Administrar noticias</a></li>
            </ul>
        </nav>
    </header>
    <div class="container-adm">
        <div class="container-adm__div">
            <?php
            $this->cargarViewEnTemplate($nombreView, $datosModel, $datosVariosArrays);
            ?>
        </div>
    </div>
    <script src="http://localhost/proyecto_tienda_fruitsMVC/scripts/scripts.js"></script>
</body>
</html>