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
class Controller {
    /**
     *
     * @var Model 
     */
    protected $model;
    /**
     *
     * @var View
     */
    protected $view;
    
  
    
    function __construct()
    {
        $this->view = new View();
    }
    
    function action_index()
    {
    }
    
    public function redirectTo($page = ""){
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('Location:' . $host . $page);
    }
}
