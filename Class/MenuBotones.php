<?php
include_once "Paginas.php";
include_once "Boton.php";

class MenuBotones
{
    private $paginas;
    private $numeroDePagina;
    private $botonIzquierdo;
    private $botonDerecho;
    private $clases;

    public function __construct($valorBoton = null, $clases = "")
    {
        $this->paginas = new Paginas(3);
        $this->botonIzquierdo = new Boton('', -1, '<i class="fas fa-arrow-left"></i>', 'productos-en-stock__buttons');
        $this->botonDerecho = new Boton('', 1, '<i class="fas fa-arrow-right"></i>', 'productos-en-stock__buttons');
        $this->clases = $clases;
        $this->establecerPagina($valorBoton);
    }

    public function establecerPagina($valorBoton)
    {
        //isset($_GET[$this->botonIzquierdo->getName()])
        if($valorBoton == -1)
        {
            session_start();

            $this->paginas->setPaginaActual($_SESSION['nPagina'] + $this->botonIzquierdo->getValor());

            $_SESSION['nPagina'] = $this->paginas->getPaginaActual();

            $this->numeroDePagina = $this->paginas->getPaginaActual();
        }
        //isset($_GET[$this->botonDerecho->getName()])
        else if($valorBoton == 1)
        {
            session_start();

            $this->paginas->setPaginaActual($_SESSION['nPagina'] + $this->botonDerecho->getValor());

            $_SESSION['nPagina'] = $this->paginas->getPaginaActual();

            $this->numeroDePagina = $this->paginas->getPaginaActual();
        }
        else
        {
            session_start();
            $_SESSION['nPagina'] = $this->paginas->getPaginaActual();

            $this->numeroDePagina = $this->paginas->getPaginaActual();
        }
    }

    public function getNumeroDePagina()
    {
        return ($this->numeroDePagina - 1) * $this->paginas->getCantidadRegistrosMostradosXPagina();
    }

    public function getClases()
    {
        return $this->clases;
    }

    public function menuBotonesView()
    {
        require "ViewsComponents/menuBotonesView.php";
    }
}

?>