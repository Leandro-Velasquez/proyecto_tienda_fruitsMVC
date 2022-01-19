<?php

class Controller{
    public $datos;

    public function __construct()
    {
        $this->datos = array();
    }

    public function cargarTemplate($nombreView, $datosModel = array()){
        $this->datos = $datosModel;
        require 'Views/template.php';
    }

    public function cargarViewEnTemplate($nombreView, $datosModel = array()){
        extract($datosModel);
        require 'Views/'.$nombreView.'.php';
    }

    public function cargarTemplatePanelAdm($nombreView, $datosModel = array()){
        $this->datos = $datosModel;
        require 'Views/template_panel_adm.php';
    }

}

?>