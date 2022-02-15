<form class="<?php echo $this->getClases()[0]; ?>" action="<?php echo $this->getAction(); ?>" method="<?php echo $this->getMethod(); ?>">
<?php
?>
    <div class="<?php echo $this->getClases()[1]; ?>">
        <?php
        (new InputText("name", "Name", $this->getClases()[2]))->inputTextView();
        (new InputText("email", "Email", $this->getClases()[2]))->inputTextView();
        (new InputText("phone", "Phone", $this->getClases()[2]))->inputTextView();
        (new InputText("subject", "Subject", $this->getClases()[2]))->inputTextView();
        ?>
    </div>
<?php
    (new TextArea("message", "", "Message", $this->getClases()[3]))->textAreaView();
    
    (new ButtonForm("SUBMIT", $this->getClases()[4]))->buttonFormView();
?>
</form>