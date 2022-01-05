<?php
class Core{
    public function __construct()
    {
        $this->run();
    }

    public function run(){
        $parametros = array();
        if(isset($_GET['pag']) && !empty($_GET['pag'][0])){
            $url = explode('/', $_GET['pag']);
            $controller = $url[0].'Controller';
            array_shift($url);
            if(!empty($url[0]))
            {
                $metodo = $url[0];
                array_shift($url);
                if(count($url) > 0){
                    $parametros = $url;
                }
                else{
                    $parametros = array();
                }
            }
            else{
                $metodo = 'index';
            }
        }
        else{
            $controller = 'HomeController';
            $metodo = 'index';
        }

        if(!file_exists('Controllers/'.$controller.'.php')){
            $controller = 'HomeController';
            $metodo = 'index';
        }
        
        $c = new $controller;
        call_user_func_array(array($c, $metodo), $parametros);
    }
}
?>