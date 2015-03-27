<?php


/**
 *
 * @author igor
 */
class View_Projects extends View {
    
    public $content_view = "templates/projectsList.php";
    
    public function generateView($data){
        parent::generate($this->content_view, $template_view = "", $data);
    }

}
