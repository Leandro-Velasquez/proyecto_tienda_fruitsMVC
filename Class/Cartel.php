<?php
class Cartel
{
    private $contenido;
    private $clases;

    public function __construct($contenido, $clases = "")
    {
        $this->contenido = $contenido;
        $this->clases = $clases;
    }

    public function getContenido()
    {
        return $this->contenido;
    }

    public function getClases()
    {
        return $this->clases;
    }

    public function cartelView()
    {
        require "ViewsComponents/cartelView.php";
    }
}
?>