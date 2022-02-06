<?php
if(!empty($this->label))
{
    echo '<div class="agregar-productos__container-label-file">';
    $this->label->labelView();
    echo '<span id="agregar-productos__span-label-file" class="agregar-productos__span-label-file"></span>';
    echo "</div>";
}
?>
<input id="<?php echo $this->getName(); ?>" class="<?php echo $this->getClases(); ?>" type="file" name="<?php echo $this->getName(); ?>">