<?php
include "Class/InputText.php";
include "Class/ButtonForm.php";
include "Class/TextArea.php";

class FormContact
{
    private $action;
    private $method;
    private $clases;

    public function __construct($action, $method, $clases = array("formClass", "div-container-inputTextClass", "inputTextClass", "textAreaClass", "buttonClass"))
    {
        $this->action = $action;
        $this->method = $method;
        $this->clases = $clases;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getClases()
    {
        return $this->clases;
    }

    public function formContactView()
    {
        require "ViewsComponents/formContactView.php";
    }
}
?>