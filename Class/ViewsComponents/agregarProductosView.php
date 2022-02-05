<form class="<?php echo $this->clases; ?>" method="POST" enctype="multipart/form-data">
<?php
$this->inputCodigoProducto->inputTextView();
$this->inputNombreProducto->inputTextView();
$this->inputPrecioProducto->inputTextView();
$this->inputSubirArchivo->subirArchivosView();
$this->button->buttonFormView();
?>
</form>