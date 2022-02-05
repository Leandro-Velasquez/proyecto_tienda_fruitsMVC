<?php

class registro
{
    private $registro;
    private $datos;
    private $clasesTr;
    private $clasesTd;

    public function __construct($registro = array(), $clasesTr = "", $clasesTd = "")
    {
        $this->datos = $registro;
        $this->clasesTr = $clasesTr;
        $this->clasesTd = $clasesTd;
    }

    public function armarRegistro()
    {
        $campos = array();
        foreach($this->datos as $dato)
        {
            array_push($campos, "<td>" . $dato . "</td>");
        }
        $this->registro = "<tr class=$this->clasesTr>" . implode("", $campos) ."</tr>";
    }

    public function getClasesTr()
    {
        return $this->clasesTr;
    }

    public function getClasesTd()
    {
        return $this->clasesTd;
    }

    public function getRegistro()
    {
        $this->armarRegistro();
        return $this->registro;
    }
}
?>