<?php
class HomeController extends Controller{
    public function index(){
        $this->cargarTemplate('home.php');
    }
}

?>