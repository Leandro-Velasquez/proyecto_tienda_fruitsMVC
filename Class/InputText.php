<?php
class InputText
{
    private $name;
    private $placeholder;
    private $clases;

    public function __construct($name, $placeholder="", $clases = "")
    {
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->clases = $clases;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    public function getClases()
    {
        return $this->clases;
    }

    public function inputTextView()
    {
        require "ViewsComponents/inputTextView.php";
    }
}
?>