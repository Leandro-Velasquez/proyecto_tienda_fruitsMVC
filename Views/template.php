<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styles/styles.css">
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
                <a href="" class="container-flex-items__item3-a"><i class="fas fa-chevron-right"></i>Home</a>
                <a href="" class="container-flex-items__item3-a"><i class="fas fa-chevron-right"></i>About</a>
                <a href="" class="container-flex-items__item3-a"><i class="fas fa-chevron-right"></i>Shop</a>
                <a href="" class="container-flex-items__item3-a"><i class="fas fa-chevron-right"></i>News</a>
                <a href="" class="container-flex-items__item3-a"><i class="fas fa-chevron-right"></i>Contact</a>
            </div>
            <div class="container-flex-items__item4">
                <h3 class="container-flex-items__h3">Subscribe</h3>
                <p class="container-flex-items__p">Subscribe to our mailing list to get the latest updates.</p>
                <form action="" class="container-flex-items__form">
                    <input type="text" class="container-flex-items__input">
                    <button class="container-flex-items__form-button"><i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
        <div class="div-social">
            <p class="container-flex-items__p">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <div>
                <a class="div-social__a" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="div-social__a" href=""><i class="fab fa-twitter"></i></a>
                <a class="div-social__a" href=""><i class="fab fa-instagram"></i></a>
                <a class="div-social__a" href=""><i class="fab fa-linkedin"></i></a>
                <a class="div-social__a" href=""><i class="fab fa-dribbble"></i></a>
            </div>
        </div>
    </footer>
    <!---------->
</body>
</html>