    <div class="header-shop-products-div">
        <p class="header-shop-products-div__p">FRESH AND ORGANIC</p>
        <h1 class="header-shop-products-div__h1">Cart</h1>
    </div>
</header>
<section class="section-cart">
    <div class="section-cart__div">
        <?php
        include "Class/CarroProductos.php";

        (new CarroProductos($datosVariosArrays, array("table-cart", "table-cart__tr-head-cart", "table-cart__th", "table-cart__tr-product", "table-cart__td", "table-cart__img")))->carroProductosView();
        ?>
    </div>
</section>