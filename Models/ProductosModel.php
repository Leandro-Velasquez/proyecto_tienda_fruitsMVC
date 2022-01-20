<?php

class ProductosModel{
    private $con;

    public function __construct()
    {
        $this->con = Conexion::getConexion();
    }

    
}

?>