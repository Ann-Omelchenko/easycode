<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

 <?php foreach ($allCustomer as $customer):?>
       <div>
           <?php echo $customer->name ?>
           <br />
       </div>
 <?php endforeach;?>
