<?php

require_once 'iCalculator.php';

class Power implements iPower
{

public function multiply2($a){
    return $a * $a .'<br>';
}

public function multiply3($a)
{
    return $a * $a * $a .'<br>';
}


public function multiply4($a){
    return $a * $a * $a * $a.'<br>';
}

public function multiply5($a){
    return $a * $a * $a * $a * $a.'<br>';
}

}


