<?php
class ButtonForm
{
    private $contenido;
    private $clases;

    public function __construct($contenido, $clases = "")
    {
        $this->contenido = $contenido;
        $this->clases = $clases;
    }

    public function getClases()
    {
        return $this->clases;
    }

    public function getContenido()
    {
        return $this->contenido;
    }

    public function buttonFormView()
    {
        require "ViewsComponents/buttonFormView.php";
    }
}
?>