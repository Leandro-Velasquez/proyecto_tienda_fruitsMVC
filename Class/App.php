<?php
include_once "Tabla.php";
include_once "Paginas.php";
include_once "MenuBotones.php";


class App
{
    private $tabla;
    private $paginas;
    private $menuBotones;

    public function __construct($registrosXPagina, $valorBoton = null)
    {
        $this->menuBotones = new MenuBotones($valorBoton, 'productos-en-stock__div-buttons');

        $this->tabla = new Tabla($this->menuBotones->getNumeroDePagina(), $registrosXPagina, 'productos-en-stock__table', array("codigo_producto", "nombre", "precio"));

        $this->App();
    }

    public function establecerPagina($valor)
    {
        echo $valor;
    }

    public function App()
    {
        require "ViewsComponents/appView.php";
    }
}
?>