<?php
class View_Login extends View{
    public $content_view = "templates/login_form.php";
    
    public function generateView($data){
        parent::generate($this->content_view, $template_view = "", $data);
    }
  
    
}

