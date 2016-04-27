<?php
require_once '3Calculator.php';

$calculator = new Power();
echo $calculator->multiply2(3);
echo $calculator->multiply3(3);
echo $calculator->multiply4(3);
echo $calculator->multiply5(3);
echo '<hr/>';

$obj = new Calculator();
echo $obj->plus2($calculator->multiply2(3));
echo $obj->plus3($calculator->multiply3(3));
echo $obj->plus4($calculator->multiply4(3));
echo $obj->plus5($calculator->multiply5(3));