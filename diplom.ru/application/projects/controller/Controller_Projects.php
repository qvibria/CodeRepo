<?php

include 'application/projects/view/View_Projects_List.php';
/**
 * Description of Controller
 *
 * @author igor
 */
class Controller_Projects extends Controller {
    
    
    public function action_Index()
    {
        $this->view = new View_Projects_List();
        $this->view->generateView();
    }
    
    
    
 
}
