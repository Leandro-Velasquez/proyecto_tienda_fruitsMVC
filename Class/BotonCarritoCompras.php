<?php
class BotonCarritoCompras
{
    private $cantidadProductos;
    private $clases;

    public function __construct($clases = array("div-container", "icon-cart", "div-count-products"))
    {
        $this->cantidadProductos = 0;
        $this->clases = $clases;
    }

    public function setCantidadProductos($ventana)
    {
        if($ventana == "shop")
        {
            if(!empty($_SESSION['productos']))
            {
                $this->cantidadProductos = count(explode(",", substr($_SESSION['productos'], 0, -1)));
            }
        }
    }

    public function getCantidadProductos()
    {
        return $this->cantidadProductos;
    }

    public function getClases()
    {
        return $this->clases;
    }

    public function botonCarritoComprasView()
    {
        require "ViewsComponents/botonCarritoComprasView.php";
    }
}
?>