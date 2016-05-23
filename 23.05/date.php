<?php

$name = $_GET['inputName3'];
$category = $_GET['category'];
$cost = $_GET['inputCost3'];

function check_length($value = "", $min, $max) {
    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
    return !$result;
}

if(!empty($name) && !empty($cost))  {

    if(check_length($name, 3, 50) && (preg_match("|^[\d]*$|", $cost))){
        echo 'Product name: '. $name;
        echo '<br />' ;
        echo 'Category: '. $category;
        echo '<br />';
        echo 'Product cost: '. $cost;
    } else {
        require_once 'form.php';
        echo "Введенные данные некорректные или не верен формат числа!";
    }

} else {
    require_once 'form.php';
    echo "Заполните пустые поля!";
}

?>