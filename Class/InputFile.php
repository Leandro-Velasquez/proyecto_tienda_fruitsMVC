<?php

class InputFile
{
    private $name;
    private $clases;
    private $label;

    public function __construct($name, $clases = "", $label= null)
    {
        $this->name = $name;
        $this->clases = $clases;
        if(!empty($label))
        {
            $this->label = $label;
        }
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