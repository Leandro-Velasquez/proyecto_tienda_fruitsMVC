<?php
//include_once "Models/ProductosModel.php";
include_once "Registro.php";

class Tabla
{
    private $indiceDesdeDondeBuscar;
    private $cantidadRegistros;
    private $registros;
    private $nombreColumnas;
    private $clases;

    public function __construct($indiceDesdeDondeBuscar, $cantidadRegistros, $clases = "", $nombreColumnas = array())
    {
        $this->indiceDesdeDondeBuscar = $indiceDesdeDondeBuscar;
        $this->cantidadRegistros = $cantidadRegistros;
        
        $this->nombreColumnas = $nombreColumnas;
        $this->clases = $clases;
        $this->registros = $this->buscarRegistros();
    }

    public function mostrarRegistrosEnTabla()
    {
        foreach($this->colocarRegistrosEnEtiquetasTd() as $registro)
        {
            echo $registro;
        }
    }

    public function colocarRegistrosEnEtiquetasTd()
    {
        $copiaRegistrosConRegistrosVacios = $this->agregarRegistrosVacios($this->registros);
        $registros = array();
        foreach($copiaRegistrosConRegistrosVacios as $registro)
        {
            $r = new Registro($registro, 'productos-en-stock__tr');
            array_push($registros, $r->getRegistro());
        }
        return $registros;
    }

    public function buscarRegistros()
    {
        $productos = new ProductosModel();
        $registros = $productos->getProductosLimitOffset($this->cantidadRegistros, $this->indiceDesdeDondeBuscar);
        return $registros;
    }

    public function mostrarTitulosColumnas($clasesThead, $clasesTh)
    {
        $th = "";
        foreach($this->nombreColumnas as $nombreColumna)
        {
            $th .= "<th class=$clasesTh>" . $nombreColumna . "</th>";
        }
        $titulosColumnas = "<thead class=$clasesThead><tr>" . $th . "</tr></thead>";
        return $titulosColumnas;
    }

    public function agregarRegistrosVacios($registros)
    {
        $registrosCopia = $registros;
        while(count($registrosCopia) < $this->cantidadRegistros)
        {
            array_push($registrosCopia, $this->generarRegistroVacio($this->registros[0]));
        }
        return $registrosCopia;
    }

    public function generarRegistroVacio($registroMuestra)
    {
        $registroVacioGenerado = array();
        foreach($registroMuestra as $key=>$value)
        {
            $registroVacioGenerado[$key] = "";
        }
        return $registroVacioGenerado;
    }

    public function getClases()
    {
        return $this->clases;
    }

    public function tablaView()
    {
        require "ViewsComponents/tablaView.php";
    }
}
?>