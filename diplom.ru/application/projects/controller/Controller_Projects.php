<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
