<?php
//include_once "Conexion.php";

class Paginas {
    
    //Atributos
    private $con;
    private $indice;
    private $paginaActual;
    private $cantidadPaginas;
    private $cantidadRegistrosMostradosXPagina;


    public function __construct($cantidadRegistrosMostradosXPagina)
    {
        $this->indice = 1;
        $this->cantidadRegistrosMostradosXPagina = $cantidadRegistrosMostradosXPagina;
        $this->con = Conexion::getConexion();
        $this->cantidadPaginas = $this->getCantidadPaginas();
    }

    public function calcularNumeroDePaginas($cantidadRegistrosMostradosXPagina)
    {
        $cantidadProductos = $this->getCantidadProductos();
        return ceil($cantidadProductos / $cantidadRegistrosMostradosXPagina);
    }

    public function getCantidadProductos()
    {
        $sql = $this->con->query("SELECT COUNT(*) AS cantidadProductos FROM productos");
        $cantidadProductos = $sql->fetch(PDO::FETCH_ASSOC);
        return $cantidadProductos['cantidadProductos'];
    }

    public function getCantidadPaginas()
    {
        return $this->calcularNumeroDePaginas($this->cantidadRegistrosMostradosXPagina);
    }

    public function getIndice()
    {
        return $this->indice;
    }

    public function getCantidadRegistrosMostradosXPagina()
    {
        return $this->cantidadRegistrosMostradosXPagina;
    }

    public function getPaginaActual()
    {
        if(empty($this->paginaActual))
        {
            return $this->getIndice();
        }
        else
        {
            return $this->paginaActual;
        }
    }

    public function setPaginaActual($paginaActual)
    {
        if($paginaActual > 0 && $paginaActual <= $this->getCantidadPaginas())
        {
            $this->paginaActual = $paginaActual;
        }
        else if($paginaActual < 1)
        {
            $this->paginaActual = $this->getIndice();
        }
        else if($paginaActual > $this->getCantidadPaginas())
        {
            $this->paginaActual = $this->getCantidadPaginas();
        }
    }
}
?>