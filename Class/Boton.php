<?php
class Boton
{
    private $name;
    private $valor;
    private $contenido;
    private $clases;

    public function __construct($name, $valor, $contenido, $clases = "")
    {
        $this->name = $name;
        $this->valor = $valor;
        $this->contenido = $contenido;
        $this->clases = $clases;
    }

    public function botonView()
    {
        require "ViewsComponents/botonView.php";
    }

    public function getName()
    {
        return $this->name;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function getContenido()
    {
        return $this->contenido;
    }

    public function getClases()
    {
        return $this->clases;
    }
}
?>