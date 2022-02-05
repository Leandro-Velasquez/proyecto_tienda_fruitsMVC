<?php
class Archivo
{
    private $archivo;

    public function __construct($archivo)
    {
        $this->archivo = $archivo;
    }

    public function getNombreArchivo()
    {
        return $this->archivo['name'];
    }

    public function getTmpName()
    {
        return $this->archivo['tmp_name'];
    }

    public function getTipoArchivo()
    {
        return pathinfo($this->getNombreArchivo(), PATHINFO_EXTENSION);
    }

    public function getTamañoArchivo()
    {
        return $this->archivo['size'];
    }
}
?>