<?php

class registro
{
    private $registro;
    private $datos;

    public function __construct($registro = array())
    {
        $this->datos = $registro;
    }

    public function armarRegistro()
    {
        $campos = array();
        foreach($this->datos as $dato)
        {
            array_push($campos, "<td>" . $dato . "</td>");
        }
        $this->registro = "<tr>" . implode("", $campos) ."</tr>";
    }

    public function getRegistro()
    {
        $this->armarRegistro();
        return $this->registro;
    }
}
?>