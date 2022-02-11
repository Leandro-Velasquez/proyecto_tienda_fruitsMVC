<?php
class BotonEnlace
{
    private $contenido;
    private $link;
    private $clases;

    public function __construct($contenido, $link = "#", $clases = "")
    {
        $this->contenido = $contenido;
        $this->link = $link;
        $this->clases = $clases;
    }

    public function getContenido()
    {
        return $this->contenido;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function getClases()
    {
        return $this->clases;
    }

    public function agregarNuevaClase($nuevaClase)
    {
        $this->clases .= " " . $nuevaClase;
    }

    public function botonEnlaceView()
    {
        require "ViewsComponents/botonEnlaceView.php";
    }
}
?>