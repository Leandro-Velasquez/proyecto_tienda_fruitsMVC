<?php
include "InputText.php";
include "ButtonForm.php";
include "InputFile.php";
include "Label.php";
include "Archivo.php";
include "Cartel.php";

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
        if($this->verificarCamposVacios($arrayDatosPOST) && $this->verificarCodigoProductoNoSeaRepetido($arrayDatosPOST['codigo']) && $this->verificarArchivoImagen($archivo))
        {
            $productosModels = new ProductosModel();
            $arrayDatos = $arrayDatosPOST;

            $directorioDeDestino = "Img/productos/" . $archivo['name'];

            $arrayDatos['rutaImagen'] = $directorioDeDestino;

            $productosModels->agregarProducto($arrayDatos);
            $this->agregarImagenALaCarpetaLocal($archivo, $directorioDeDestino);
            $cartel = new Cartel("El producto fue agregado exitosamente", "agregar-productos__cartel-exito");
            $cartel->cartelView();
        }
    }

    public function agregarImagenALaCarpetaLocal($archivo, $directorioDeDestino)
    {
        move_uploaded_file($archivo['tmp_name'], $directorioDeDestino);
    }

    public function verificarArchivoImagen($archivo)
    {
        $archivo = new Archivo($archivo);
        if($archivo->getTipoArchivo() == "png" || $archivo->getTipoArchivo() == "jpg" || $archivo->getTipoArchivo() == "jpeg")
        {
            return true;
        }
        else
        {
            $cartel = new Cartel("El archivo subido no es una imagen", "agregar-productos__cartel");
            $cartel->cartelView();
            return false;
        }
    }

    public function verificarCodigoProductoNoSeaRepetido($codigo)
    {
        $productosModels = new ProductosModel();
        $respuesta = $productosModels->buscarRegistroPorCodigo($codigo);
        if($respuesta)
        {
            $cartel = new Cartel("El codigo ingresado ya esta registrado en la base de datos", "agregar-productos__cartel");
            $cartel->cartelView();
            return false;
        }
        else
        {
            return true;
        }
    }

    public function verificarCamposVacios($arrayDatos)
    {
        $verificarCampos = true;
        foreach($arrayDatos as $key=>$value)
        {
            if(empty(trim($value)))
            {
                $cartel = new Cartel("El campo " . $key . " se encuentra vacio", "agregar-productos__cartel");
                $cartel->cartelView();
                $verificarCampos = false;
            }
        }
        return $verificarCampos;
    }

    public function agregarProductosView()
    {
        require "ViewsComponents/agregarProductosView.php";
    }
}
?>