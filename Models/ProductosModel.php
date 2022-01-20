<?php

class ProductosModel{
    private $con;

    public function __construct()
    {
        $this->con = Conexion::getConexion();
    }

    public function getProductos()
    {
        $sql = $this->con->query("SELECT * FROM productos");
        $productos = $sql->fetchall(PDO::FETCH_ASSOC);
        return $productos;
    }
}

?>