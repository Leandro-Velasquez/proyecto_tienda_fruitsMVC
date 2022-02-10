<div class="<?php echo $this->getClases()[0]; ?>">
    <img class="<?php echo $this->getClases()[1]; ?>" src="<?php echo $this->getImagen(); ?>" alt="">
    <div class="<?php echo $this->getClases()[2]; ?>">
        <h3 class="<?php echo $this->getClases()[3]; ?>"><?php echo $this->getNombre(); ?></h3>
        <p class="<?php echo $this->getClases()[4]; ?>">Per Kg</p>
        <span class="<?php echo $this->getClases()[5]; ?>"><?php echo $this->getPrecio(); ?></span>
    </div>
    <?php $this->boton->botonEnlaceView(); ?>
</div>