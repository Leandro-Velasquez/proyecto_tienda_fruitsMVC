<?php
class AboutController extends Controller
{
    public function __construct()
    {
        $this->setUbicacionClase("about");
    }
    
    public function index()
    {
        $this->cargarTemplate("about");
    }
}
?>