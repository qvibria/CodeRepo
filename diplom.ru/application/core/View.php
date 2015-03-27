<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of View
 *
 * @author igor
 */
class View {
    public $template_view = "application/core/templates/basic_template.php"; // здесь можно указать общий вид по умолчанию.
    
    function generate($content_view, $template_view, $data = null)
    {
        
        if(is_array($data)) {
            // преобразуем элементы массива в переменные
            extract($data);
        }
        
        if(file_exists($template_view)){
            include $template_view;
        } else {
            include $this->template_view;
        }
    }
    
    public abstract function generateView($data = array());
}
