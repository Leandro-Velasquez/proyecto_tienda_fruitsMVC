<?php

class ProductosModel{
    private $con;

    public function __construct()
    {
        $this->con = Conexion::getConexion();
    }

    public function agregarProducto($arrayDatos)
    {
        $sql = $this->con->prepare("INSERT INTO productos VALUES(:codigo, :nombre, :precio, :imagen)");

        $sql->bindParam(":codigo", $arrayDatos['codigo']);
        $sql->bindParam(":nombre", $arrayDatos['nombre']);
        $sql->bindParam(":precio", $arrayDatos['precio']);
        $sql->bindParam(":imagen", $arrayDatos['rutaImagen']);
        $sql->execute();

        if($sql->rowCount() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
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

    public function getProductosNombrePrecioImgLimitOffset($limit, $indice)
    {
        $sql = $this->con->prepare('SELECT nombre, precio, imagen FROM productos LIMIT :desde,:cantidadRegistros');
        $sql->bindParam(':desde', $indice, PDO::PARAM_INT);
        $sql->bindParam(':cantidadRegistros', $limit, PDO::PARAM_INT);
        $sql->execute();
        return $sql->fetchall(PDO::FETCH_ASSOC);
    }

    public function getProducto($numeroDeRegistro)
    {
        $sql = $this->con->prepare("SELECT * FROM productos LIMIT :numeroDeRegistro,1");
        $sql->bindParam(':numeroDeRegistro', $numeroDeRegistro, PDO::PARAM_INT);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarRegistroPorCodigo($codigo)
    {
        $sql = $this->con->prepare("SELECT codigo_producto FROM productos WHERE codigo_producto=:c");
        $sql->bindParam(":c", $codigo, PDO::PARAM_INT);
        $sql->execute();
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function buscarProductoPorNombre($nombre)
    {
        $sql = $this->con->prepare("SELECT imagen, nombre, precio FROM productos WHERE nombre=:n");
        $sql->bindParam(":n", $nombre, PDO::PARAM_STR);
        $sql->execute();
        return $sql->fetch(PDO::FETCH_ASSOC);
    }
}

?>