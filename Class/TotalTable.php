<?php
class TotalTable
{
    private $subTotal;
    private $costoTransporte;
    private $total;
    private $clases;

    public function __construct($subtotal, $costoTransporte, $clases = array("table", "thead", "thead__tr", "thead__th", "tbody", "tbody__tr", "tbody__td"))
    {
        $this->setSubtotal($subtotal);
        $this->setCostoTransporte($costoTransporte);
        $this->total = $this->calcularCostoTotal();
        $this->clases = $clases;
    }

    public function setSubtotal($subtotal)
    {
        if($subtotal > 0)
        {
            $this->subTotal = $subtotal;
        }
        else
        {
            $this->subTotal = 0;
        }
    }

    public function setCostoTransporte($costoTransporte)
    {
        if($costoTransporte > 0)
        {
            $this->costoTransporte = $costoTransporte;
        }
        else
        {
            $this->costoTransporte = 0;
        }
    }

    public function getCostoTransporte()
    {
        return $this->costoTransporte;
    }

    public function getSubtotal()
    {
        return $this->subTotal;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function getClases()
    {
        return $this->clases;
    }

    public function calcularCostoTotal()
    {
        return $this->getSubtotal() + $this->getCostoTransporte();
    }

    public function totalTableView()
    {
        require "Class/ViewsComponents/totalTableView.php";
    }
}
?>