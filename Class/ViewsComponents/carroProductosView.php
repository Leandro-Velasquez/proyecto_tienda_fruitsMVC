<table class="<?php echo $this->getClases()[0]; ?>">
    <tr class="<?php echo $this->getClases()[1]; ?>">
        <th class="<?php echo $this->getClases()[2]; ?>">Product Image</th>
        <th class="<?php echo $this->getClases()[2]; ?>">Name</th>
        <th class="<?php echo $this->getClases()[2]; ?>">Price</th>
        <th class="<?php echo $this->getClases()[2]; ?>">Quantity</th>
        <th class="<?php echo $this->getClases()[2]; ?>">Total</th>
    </tr>
    <?php $this->mostrarProductos(); ?>
</table>