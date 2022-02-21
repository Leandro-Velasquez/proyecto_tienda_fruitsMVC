<?php
class ShopController extends Controller
{
    public function __construct()
    {
        $this->setUbicacionClase("shop");
    }

    public function index($nPagina = null)
    {
        session_start();
        $arrayParametros = array();
        if(empty($nPagina))
        {
            $arrayParametros["nPagina"] = 1;
        }
        else if(is_numeric($nPagina))
        {
            $arrayParametros["nPagina"] = $nPagina;
        }
        $this->cargarTemplate("shop", $arrayParametros);
    }

    public function cart()
    {
        session_start();
        $arrayProductos = array();
        if(!empty($_SESSION['productos']))
        {
            $buscarProductos = new ProductosModel();
            $productos = explode(",", substr($_SESSION['productos'], 0, -1));
            $cantidad = array_count_values($productos);
            $productos = array_unique($productos);
            $i = 0;
            foreach($productos as $nombreProducto)
            {
                array_push($arrayProductos, $buscarProductos->buscarProductoPorNombre($nombreProducto));

                array_push($arrayProductos[$i], $cantidad[$nombreProducto], "$" . strval($cantidad[$nombreProducto] * $arrayProductos[$i]['precio']));
                $i++;
            }
        }
        $this->cargarTemplate("cart", array(), $arrayProductos);
    }

    public function ingresar_tienda()
    {
        session_start();
        $_SESSION['productos'] = '';
        header("Location: http://localhost/proyecto_tienda_fruitsMVC/Shop");
    }

    public function procesar_compra($producto)
    {
        session_start();
        $_SESSION['productos'] .= $producto . ",";
        header("Location: http://localhost/proyecto_tienda_fruitsMVC/Shop");
    }
}
?>