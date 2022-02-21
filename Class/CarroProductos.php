<?php

class CarroProductos
{
    private $productos;
    private $clases;

    public function __construct($productos, $clases = array("table", "tr-head-table", "th", "tr-product", "td", "img"))
    {
        $this->productos = $productos;
        $this->clases = $clases;
    }

    public function mostrarProductos()
    {
        foreach($this->productos as $producto)
        {
            $fila = '<tr class="'. $this->getClases()[3] . '">';
            foreach($producto as $key=>$value)
            {
                if($key == "imagen")
                {
                    $fila .= '<td class="'. $this->getClases()[4] .'"><img src="http://localhost/proyecto_tienda_fruitsMVC/'. $value . '" class="'.$this->getClases()[5].'"></td>'; 
                }
                else if($key == "precio")
                {
                    $fila .= '<td class="'. $this->getClases()[4] .'">$' . $value . '</td>';
                }
                else
                {
                    $fila .= '<td class="'. $this->getClases()[4] .'">' . $value . '</td>';
                }
            }
            $fila .= '</tr>';
            echo $fila;
        }
    }

    public function getClases()
    {
        return $this->clases;
    }

    public function carroProductosView()
    {
        require "ViewsComponents/carroProductosView.php";
    }
}
?>