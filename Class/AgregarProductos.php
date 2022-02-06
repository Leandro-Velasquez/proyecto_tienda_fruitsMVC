<?php
include "InputText.php";
include "ButtonForm.php";
include "InputFile.php";
include "Label.php";
include "Archivo.php";

class AgregarProductos
{
    private $clases;
    private $inputCodigoProducto;
    private $inputNombreProducto;
    private $inputPrecioProducto;
    private $labelSubirArchivo;
    private $inputSubirArchivo;
    private $button;

    public function __construct($clases = "")
    {
        $this->clases = $clases;
        $this->inputCodigoProducto = new InputText("codigo", "Codigo del producto", "agregar-productos__input");
        $this->inputNombreProducto = new InputText("nombre", "Nombre producto", "agregar-productos__input");
        $this->inputPrecioProducto = new InputText("precio", "Precio producto", "agregar-productos__input");
        $this->labelSubirArchivo = new Label("Seleccionar Imagen", "imagen", "agregar-productos__label-file");
        $this->inputSubirArchivo = new InputFile("imagen", "agregar-productos__input-file", $this->labelSubirArchivo);
        $this->button = new ButtonForm("Agregar", "agregar-productos__button");



        $this->agregarProductosView();
    }

    public function agregarProductoALaBaseDeDatos($arrayDatosPOST, $archivo)
    {
        $arrayDatosPOST = $arrayDatosPOST;
        $productosModels = new ProductosModel();
        $archivo = new Archivo($archivo);

        if($archivo->getTipoArchivo() == "png" || $archivo->getTipoArchivo() == "jpg" || $archivo->getTipoArchivo() == "jpeg")
        {
            $directorioDeDestino = "Img/productos/";
            $directorioDeDestino .= $archivo->getNombreArchivo();
            $arrayDatosPOST['rutaImagen'] = $directorioDeDestino;
            if($productosModels->agregarProducto($arrayDatosPOST))
            {
                $this->agregarImagenALaCarpetaLocal($archivo, $directorioDeDestino);
            }
            else
            {
                echo "HUBO UN PROBLEMA AL AGREGAR EL PRODUCTO<br>";
            }
        }
    }

    public function agregarImagenALaCarpetaLocal($archivo, $directorioDeDestino)
    {
        move_uploaded_file($archivo->getTmpName(), $directorioDeDestino);
    }

    public function agregarProductosView()
    {
        require "ViewsComponents/agregarProductosView.php";
    }
}
?>