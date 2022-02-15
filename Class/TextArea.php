<?php
class TextArea
{
    private $name;
    private $id;
    private $placeholder;
    private $clases;

    public function __construct($name, $id = "", $placeholder = "", $clases = "")
    {
        $this->name = $name;
        $this->id = $id;
        $this->placeholder = $placeholder;
        $this->clases = $clases;
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    public function getClases()
    {
        return $this->clases;
    }

    public function textAreaView()
    {
        require "ViewsComponents/textAreaView.php";
    }
}
?>