<?php

class Controller{
    public $datos;
    public $datosVariosArrays;

    public function __construct()
    {
        $this->datos = array();
        $this->datosVariosArrays = array();
    }

    public function cargarTemplate($nombreView, $datosModel = array()){
        $this->datos = $datosModel;
        require 'Views/template.php';
    }

    public function cargarTemplatePanelAdm($nombreView, $datosModel = array(), $datosVariosArrays = array()){
        $this->datos = $datosModel;
        $this->datosVariosArrays = $datosVariosArrays;
        require 'Views/template_panel_adm.php';
    }

    public function cargarViewEnTemplate($nombreView, $datosModel = array(), $datosVariosArrays = array()){
        extract($datosModel);
        require 'Views/'.$nombreView.'.php';
    }

    

}

?>