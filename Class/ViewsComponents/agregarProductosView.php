<form class="<?php echo $this->clases; ?>" method="POST" enctype="multipart/form-data">
<?php
if(count($_POST) > 0)
{
    $this->agregarProductoALaBaseDeDatos($_POST, $_FILES['imagen']);
}
$this->inputCodigoProducto->inputTextView();
$this->inputNombreProducto->inputTextView();
$this->inputPrecioProducto->inputTextView();
$this->inputSubirArchivo->subirArchivosView();
$this->button->buttonFormView();
?>
</form>