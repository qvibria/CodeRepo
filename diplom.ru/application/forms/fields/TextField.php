<?php

class PAsswordField extends Field{
    
    public function render() {
        echo "<label for='$this->key'>$this->label</label";
        echo "<input id='$this->key' type='password' name='$this->key'>$this->value</input>";
    }

}