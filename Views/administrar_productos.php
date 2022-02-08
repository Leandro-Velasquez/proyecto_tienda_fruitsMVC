<div class="productos-en-stock">
    <h2 class="productos-en-stock__h2">Productos</h2>
    <?php
    include_once "Class/App.php";
    $app = new App(5, $valorBoton);
    ?>
</div>
<div class="agregar-productos">
    <h2 class="agregar-productos__h2">Agregar productos</h2>
    <?php
    include_once "Class/AgregarProductos.php";
    $agregarProductos = new AgregarProductos("agregar-productos__form");
    ?>
</div>