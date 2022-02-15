<?php
class ContactController extends Controller
{
    public function __construct()
    {
        $this->setUbicacionClase("contact");
    }

    public function index()
    {
        $this->cargarTemplate("contact");
    }
}
?>