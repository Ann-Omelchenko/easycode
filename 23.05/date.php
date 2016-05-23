<?php
/*echo '<h1>Привет, <b>' . $_GET['category'] . '</b></h1>!';
echo '<h1>Привет, <b>' . $_GET['inputName3'] . '</b></h1>!';
echo '<h1>Привет, <b>' . $_GET['inputCost3'] . '</b></h1>!'; */

$name = $_GET['inputName3'];
$category = $_GET['category'];
$cost = $_GET['inputCost3'];


function check_length($value = "", $min, $max) {
    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
    return !$result;
}

if(!empty($name) && !empty($cost)) {

    if(check_length($name, 3, 50) ) {
        echo 'Product name: '. $name;
        echo '<br />' ;
    } else {
        echo "Введенные данные некорректные";
    }
    
    echo 'Category'. $category;
    echo '<br />';
    
    if(preg_match("|^[\d]*$|", $cost)) {
        echo 'Product cost: '. $cost;
    } else{
        echo "Не верен формат числа." ;
    }

} else {
    echo "Заполните пустые поля";
}



?>