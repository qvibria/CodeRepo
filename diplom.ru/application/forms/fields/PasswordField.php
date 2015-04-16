<?php

class TextField extends Field{
    
    public function render() {
        echo "<input type='text' name='$this->key'>$this->value</input>";
    }

}