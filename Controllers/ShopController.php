<?php
class ShopController extends Controller
{
    public function __construct()
    {
        $this->setUbicacionClase("Shop");
    }
    public function index()
    {
        $this->cargarTemplate("shop");
    }
}
?>