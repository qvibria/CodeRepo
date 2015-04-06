<?php


/**
 *
 * @author igor
 */
class View_Projects_List extends View {
    
    public $content_view = "templates/projectsList.php";
    
    public function generateView($data = array()){
        parent::generate($this->content_view, $template_view = "", $data);
    }

}
