<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <!--HEADER-->
    <header class="header">
        <nav class="nav">
            <ul class="menu">
                <li class="menu__item"><img src="Img/logo.png" alt="logo"></li>
                <div>
                    <li class="menu__item">Home</li>
                    <li class="menu__item">About</li>
                    <li class="menu__item">Pages</li>
                    <li class="menu__item">News</li>
                    <li class="menu__item">Contact</li>
                    <li class="menu__item">Shop</li>
                </div>
                <div>
                    <li class="menu__item"><i class="fas fa-shopping-cart"></i></li>
                    <li class="menu__item"><i class="fas fa-search"></i></li>
                </div>
            </ul>
        </nav>
<?php
    $this->cargarViewEnTemplate($nombreView, $datosModel);
?>
    <!---------->
    <footer>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </footer>
    <!--FOOTER-->
</body>
</html>