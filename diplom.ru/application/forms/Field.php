<?php


abstract class Field{
    protected $key;
    protected $value;
    protected $label;
    
    function __construct($key, $value, $label) {
        $this->key = $key;
        $this->value = $value;
        $this->label = $label;
    }

        abstract function render();

}

