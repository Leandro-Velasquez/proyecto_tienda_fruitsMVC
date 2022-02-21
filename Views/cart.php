    <div class="header-shop-products-div">
        <p class="header-shop-products-div__p">FRESH AND ORGANIC</p>
        <h1 class="header-shop-products-div__h1">Cart</h1>
    </div>
</header>
<section class="section-cart">
    <div class="section-cart__div1">
        <?php
        include "Class/CarroProductos.php";
        include "Class/TotalTable.php";
        include "Class/BotonEnlace.php";

        $carroProductos = new CarroProductos($datosVariosArrays, array("table-cart", "table-cart__tr-head-cart", "table-cart__th", "table-cart__tr-product", "table-cart__td", "table-cart__img"));
        $carroProductos->carroProductosView();
        ?>
    </div>
    <div>
        <?php
        (new TotalTable($carroProductos->getSubtotal(), 50, array("table-total", "table-total__thead", "table-total__thead-tr", "table-total__th", "table-total__tbody", "table-total__tr", "table-total__td")))->totalTableView();
        ?>
        <div class="section-cart__div2">
            <?php
            $botonUpdate = new BotonEnlace("Update Cart", "link", "section-cart__boton");
            $botonUpdate->botonEnlaceView();
            $botonCheck = new BotonEnlace("Check Out", "link", "section-cart__boton");
            $botonCheck->botonEnlaceView();
            ?>
        </div>
    </div>
</section>