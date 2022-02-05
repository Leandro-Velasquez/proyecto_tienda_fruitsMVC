<?php
class InputFile
{
    private $name;
    private $clases;

    public function __construct($name, $clases = "")
    {
        $this->name = $name;
        $this->clases = $clases;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getClases()
    {
        return $this->clases;
    }

    public function subirArchivosView()
    {
        require "ViewsComponents/inputFileView.php";
    }
}
?>