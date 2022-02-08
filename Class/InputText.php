<?php
class InputText
{
    private $name;
    private $placeholder;
    private $clases;
    private $autocomplete;

    public function __construct($name, $placeholder="", $clases = "", $autocomplete = "off")
    {
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->clases = $clases;
        $this->autocomplete = $autocomplete;
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

    public function getAutocomplete()
    {
        return $this->autocomplete;
    }

    public function inputTextView()
    {
        require "ViewsComponents/inputTextView.php";
    }
}
?>