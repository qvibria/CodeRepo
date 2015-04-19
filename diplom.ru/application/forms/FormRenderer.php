<?php

class FormRenderer {
    private $formTemplate = "path/to/form/template";
    
    function __construct($template) {
        $this->formTemplate = $template;
    }

    /**
     * 
     * @param Form $form
     */
    public function render($form){
        $action = $form->getAction();
        $method = $form->getMethod();
        $fields = $form->getFields();
        
        include $this->formTemplate;
        
    }
}

