    <div class="header-shop-products-div">
        <p class="header-shop-products-div__p">fresh and organic</p>
        <h1 class="header-shop-products-div__h1">shop</h1>
    </div>
</header>
<section class="shop-products-section">
    <div>

    </div>
    <div>
        <?php
        include "Class/ProductosTiendaApp.php";
        $productosTienda = new ProductosTiendaApp(6, $nPagina);
        $productosTienda->productosTiendaAppView();
        ?>
    </div>
</section>