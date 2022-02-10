<?php
include "BotonEnlace.php";

class Producto
{
    private $imagen;
    private $nombre;
    private $precio;
    private $boton;
    private $clases;

    public function __construct($imagen, $nombre, $precio, $clases = array("div-container", "img", "div-container-h3-p-span", "h3", "p", "span", "button"))
    {
        $this->imagen = $imagen;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->clases = $clases;
        $this->boton = new BotonEnlace("Add to Cart", "#", $this->getClases()[6]);
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function getClases()
    {
        return $this->clases;
    }

    public function productoView()
    {
        require "ViewsComponents/productoView.php";
    }
}
?>