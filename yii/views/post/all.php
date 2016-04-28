<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
 ?>     
      <h1>Hello! </h1>

<?php echo $model ?>

<?php 
 
foreach ($post as $post) {
    echo $post->title;
    echo '<br/>';
    echo $post->text;
    echo '<hr/>';
}
?>

