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
    public $model;
    public $view;
    
    function __construct()
    {
        $this->view = new View();
    }
    
    function action_index()
    {
    }
}
