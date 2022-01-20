<?php
class HomeController extends Controller{
    public function index(){
        $p = new ProductosModel();
        $productos = $p->getProductosSelectNamePriceImg();
        $this->cargarTemplate('home', array(), $productos);
    }
}

?>