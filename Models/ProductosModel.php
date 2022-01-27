<?php

class ProductosModel{
    private $con;

    public function __construct()
    {
        $this->con = Conexion::getConexion();
    }

    public function getProductosSelectAll()
    {
        $sql = $this->con->query("SELECT * FROM productos");
        $productos = $sql->fetchall(PDO::FETCH_ASSOC);
        return $productos;
    }

    public function getProductosCodeNamePrice()
    {
        $sql = $this->con->query("SELECT codigo_producto, nombre, precio FROM productos");
        $productos = $sql->fetchall(PDO::FETCH_ASSOC);
        return $productos;
    }

    public function getProductosSelectNamePriceImg()
    {
        $sql = $this->con->query("SELECT nombre, precio, imagen FROM productos");
        $productos = $sql->fetchall(PDO::FETCH_ASSOC);
        return $productos;
    }

    public function getProductosLimitOffset($limit, $indice)
    {
        $sql = $this->con->prepare('SELECT codigo_producto, nombre, precio FROM productos LIMIT :desde,:cantidadRegistros');
        $sql->bindParam(':desde', $indice, PDO::PARAM_INT);
        $sql->bindParam(':cantidadRegistros', $limit, PDO::PARAM_INT);
        $sql->execute();
        return $sql->fetchall(PDO::FETCH_ASSOC);
    }
}

?>