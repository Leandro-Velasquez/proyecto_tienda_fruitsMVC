<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/proyecto_tienda_fruitsMVC/styles/styles.css">
</head>
<body>
    <?php include "Class/BotonCarritoCompras.php"; ?>
    <!--HEADER-->
    <header class="header <?php echo "header-".$this->getUbicacionClase();?>">
        <nav class="nav">
            <div class="nav__div1">
                <img class="menu__img" src="http://localhost/proyecto_tienda_fruitsMVC/Img/logo.png" alt="logo">
                <ul class="menu">
                    <div class="menu__div1">
                        <li class="menu__item menu__item--modified"><div class="li__div-a"><a href="http://localhost/proyecto_tienda_fruitsMVC/Home" class="menu__div1-a menu__div1-a--modified-home">Home</a></div><button class="menu__item-button"><i class="fas fa-plus"></i></button></li>
                        <li class="menu__item"><a href="http://localhost/proyecto_tienda_fruitsMVC/About" class="menu__div1-a"">About</a></li>
                        <li class="menu__item menu__item--modified"><div class="li__div-a"><a href="" class="menu__div1-a">Pages</a></div><button class="menu__item-button"><i class="fas fa-plus"></i></button></li>
                        <li class="menu__item menu__item--modified"><div class="li__div-a"><a href="" class="menu__div1-a">News</a></div><button class="menu__item-button"><i class="fas fa-plus"></i></button></li>
                        <li class="menu__item"><a href="http://localhost/proyecto_tienda_fruitsMVC/Contact" class="menu__div1-a">Contact</a></li>
                        <li class="menu__item menu__item--modified"><div class="li__div-a"><a href="http://localhost/proyecto_tienda_fruitsMVC/Shop/ingresar_tienda" class="menu__div1-a">Shop</a></div><button class="menu__item-button"><i class="fas fa-plus"></i></button></li>
                    </div>
                    <div class="menu__div2">
                        <li class="menu__item menu__item--modified-shopping-cart"><a class="menu__div2-a" href="http://localhost/proyecto_tienda_fruitsMVC/Shop/cart"><?php $botonCarrito = new BotonCarritoCompras(array("div-shopping-cart", "icon-shopping-cart", "count-products-shopping-cart"));
                        $botonCarrito->setCantidadProductos($this->getUbicacionClase());$botonCarrito->botonCarritoComprasView(); ?></a></li>
                    </div>
                </ul>
                <div>
                    <a class="nav__shopping-cart" href="http://localhost/proyecto_tienda_fruitsMVC/Shop/cart"><?php $botonCarrito = new BotonCarritoCompras(array("div-shopping-cart", "icon-shopping-cart", "count-products-shopping-cart"));
                    $botonCarrito->setCantidadProductos($this->getUbicacionClase());$botonCarrito->botonCarritoComprasView(); ?></a>
                    <a href="" class="nav__search"><i class="fas fa-search"></i></a>
                    <button class="btn-menu"><i class="fas fa-bars"></i></button>
                </div>
            </div>
        </nav>
<?php
    $this->cargarViewEnTemplate($nombreView, $datosModel, $datosVariosArrays);
?>
    <!--FOOTER-->
    <footer class="footer">
        <div class="container-flex-items">
            <div class="container-flex-items__item1">
                <h3 class="container-flex-items__h3">About us</h3>
                <p class="container-flex-items__p">Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
            </div>
            <div class="container-flex-items__item2">
                <h3 class="container-flex-items__h3">Get in Touch</h3>
                <p class="container-flex-items__p">34/8, East Hukupara, Gifirtok, Sadan.</p>
                <p class="container-flex-items__p">support@domain.com</p>
                <p class="container-flex-items__p">+00 111 222 3333</p>
            </div>
            <div class="container-flex-items__item3">
                <h3 class="container-flex-items__h3">Pages</h3>
                <ul class="ul-pages-a">
                    <li class="ul-pages-a__li">
                        <a href="" class="container-flex-items__item3-a"><i class="fas fa-chevron-right"></i>Home</a>
                    </li>
                    <li class="ul-pages-a__li">
                        <a href="" class="container-flex-items__item3-a"><i class="fas fa-chevron-right"></i>About</a>
                    </li>
                    <li class="ul-pages-a__li">
                        <a href="" class="container-flex-items__item3-a"><i class="fas fa-chevron-right"></i>Shop</a>
                    </li>
                    <li class="ul-pages-a__li">
                        <a href="" class="container-flex-items__item3-a"><i class="fas fa-chevron-right"></i>News</a>
                    </li>
                    <li class="ul-pages-a__li">
                        <a href="" class="container-flex-items__item3-a"><i class="fas fa-chevron-right"></i>Contact</a>
                    </li>
                </ul>
            </div>
            <div class="container-flex-items__item4 subscribe">
                <h3 class="container-flex-items__h3">Subscribe</h3>
                <p class="container-flex-items__p">Subscribe to our mailing list to get the latest updates.</p>
                <form action="" class="container-flex-items__form">
                    <input type="text" class="container-flex-items__input" placeholder="Email">
                    <button class="container-flex-items__form-button"><i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
        <div class="footer__border"></div>
        <div class="div-social">
            <p class="container-flex-items__p">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <ul class="div-social__ul">
                <li class="div-social__li">
                    <a class="div-social__a" href=""><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="div-social__li">
                    <a class="div-social__a" href=""><i class="fab fa-twitter"></i></a>
                </li>
                <li class="div-social__li">
                    <a class="div-social__a" href=""><i class="fab fa-instagram"></i></a>
                </li>
                <li class="div-social__li">
                    <a class="div-social__a" href=""><i class="fab fa-linkedin"></i></a>
                </li>
                <li class="div-social__li">
                    <a class="div-social__a" href=""><i class="fab fa-dribbble"></i></a>
                </li>
            </ul>
        </div>
    </footer>
    <!---------->
    <script src="http://localhost/proyecto_tienda_fruitsMVC/scripts/scripts.js"></script>
</body>
</html>