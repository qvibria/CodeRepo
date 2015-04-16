<?php

class Form {

    protected $action;
    protected $method;
    protected $fields;

    function getAction() {
        return $this->action;
    }

    function setAction($action) {
        $this->action = $action;
    }

        
    function getMethod() {
        return $this->method;
    }

    function setMethod($method) {
        $this->method = $method;
    }
    
    public function addField( $field ){
        $this->getFields()->push($field);
    }
    
    /**
     * 
     * @return SplDoublyLinkedList
     */
    function getFields() {
        if(!isset($this->fields)){
            $this->fields = new SplDoublyLinkedList();
        }
        return $this->fields;
    }





}
