<?php

use function PHPSTORM_META\type;

include '/xampp/htdocs/proyecto_tienda_fruitsMVC/Models/ProductosModel.php';
include '/xampp/htdocs/proyecto_tienda_fruitsMVC/Models/Conexion.php';


if(isset($_POST['paginas']))
{
    $productos = new ProductosModel();
    $cantidadProductos = count($productos->getProductosSelectAll());
    echo $cantidadProductos;
}
else if(isset($_POST['registrosXPagina']))
{
    $productos = new ProductosModel();
    $arrayProductos = $productos->getProductosLimitOffset($_POST['registrosXPagina'], $_POST['indice']);
    echo json_encode($arrayProductos);
}


?>