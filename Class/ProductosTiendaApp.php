<?php
include "Paginas.php";
//include "BotonEnlace.php";
include "Producto.php";

class ProductosTiendaApp
{
    private $productos;
    private $paginas;
    private $botones;
    private $nPaginaActual;
    private $productosXPagina;

    public function __construct($productosXPagina, $nPaginaActual)
    {
        $this->paginas = new Paginas($productosXPagina);
        $this->botones = array();
        $this->nPaginaActual = $nPaginaActual;
        $this->productosXPagina = $productosXPagina;
    }

    public function mostrarProductos()
    {
        $productos = array();
        $i = 0;
        foreach($this->getProductos() as $producto)
        {
            array_push($productos, new Producto("http://localhost/proyecto_tienda_fruitsMVC/".$producto['imagen'], $producto['nombre'], $producto['precio']."$", array("shop-productos__producto-container", "shop-productos__img", "shop-productos__container-h3-p-span", "shop-productos__h3", "shop-productos__p", "shop-productos__span", "shop-productos__button")));
            call_user_func_array(array($productos[$i], "productoView"), array());
            $i++;
        }
    }

    public function generarBotones()
    {
        for($i = 1; $i <= $this->paginas->getCantidadPaginas(); $i++)
        {
            array_push($this->botones, new BotonEnlace($i, "http://localhost/proyecto_tienda_fruitsMVC/Shop/index/".$i, "shop-productos-tienda__boton"));
            call_user_func_array(array($this->botones[$i-1], "botonEnlaceView"), array());
        }
    }





    public function getProductos()
    {
        $productosModel = new ProductosModel();
        $productos = $productosModel->getProductosNombrePrecioImgLimitOffset($this->productosXPagina, $this->paginas->getIndiceDesdeDondeTraerRegistrosDB($this->nPaginaActual));

        return $productos;
    }

    public function productosTiendaAppView()
    {
        require "ViewsComponents/productosTiendaAppView.php";
    }
}
?>