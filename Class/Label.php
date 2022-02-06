<?php
class Label
{
    private $contenido;
    private $valorAtributoFor;
    private $clases;

    public function __construct($contenido, $valorAtributoFor = "", $clases = "")
    {
        $this->contenido = $contenido;
        $this->valorAtributoFor = $valorAtributoFor;
        $this->clases = $clases;
    }

    public function getContenido()
    {
        return $this->contenido;
    }

    public function getValorAtributoFor()
    {
        return $this->valorAtributoFor;
    }

    public function getClases()
    {
        return $this->clases;
    }

    public function labelView()
    {
        require "ViewsComponents/labelView.php";
    }
}
?>