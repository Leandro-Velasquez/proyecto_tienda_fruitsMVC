<?php

class PanelAdministracionController extends Controller{

    public function index(){
        $this->cargarTemplatePanelAdm('home_panel_adm');
    }

    public function administrarProductos(){
        $p = new ProductosModel();
        $productos = $p->getProductosCodeNamePrice();
        $this->cargarTemplatePanelAdm('administrar_productos', array(), $productos);
    }
}

?>