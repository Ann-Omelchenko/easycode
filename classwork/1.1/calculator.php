<?php

require_once 'iCalculator.php';

class Calculator implements iCalculator
{
public function plus($a, $b){
    return $a + $b.'<br>';
}

public function minus($a, $b)
{
    return $a - $b.'<br>';
}


public function divide($a, $b){
    return $a / $b.'<br>';
}

public function multiply($a, $b){
    return $a * $b.'<br>';
}

}

$calculator = new Calculator();

echo $calculator->plus(1, 2); // 3
echo $calculator->minus(1, 2);
echo $calculator->divide(1, 2);
echo $calculator->multiply(1, 2);

