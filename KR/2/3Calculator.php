<?php
require_once "calculator.php";

class Calculator extends Power{

    
    public function plus2($a){
        parent::multiply2($a);
        return $a + $a .'<br>';
    }

    public function plus3($a){
        parent::multiply3($a);
        return $a + $a .'<br>';
    }
    
    public function plus4($a){
        parent::multiply4($a);
        return $a + $a .'<br>';
    }

    public function plus5($a){
        parent::multiply5($a);
        return $a + $a .'<br>';
    }
    
}

