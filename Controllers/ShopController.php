<?php
class ShopController extends Controller
{
    public function __construct()
    {
        $this->setUbicacionClase("Shop");
    }

    public function index($nPagina = null)
    {
        $arrayParametros = array();
        if(empty($nPagina))
        {
            $arrayParametros["nPagina"] = 1;
        }
        else
        {
            $arrayParametros["nPagina"] = $nPagina;
        }
        $this->cargarTemplate("shop", $arrayParametros);
    }
}
?>