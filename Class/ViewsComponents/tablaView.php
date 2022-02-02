<table class="<?php echo $this->getClases(); ?>">
    <?php
    echo $this->mostrarTitulosColumnas('productos-en-stock__thead', 'productos-en-stock__th');
    $this->mostrarRegistrosEnTabla();
    ?>
</table>