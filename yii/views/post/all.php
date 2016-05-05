<?php
<<<<<<< HEAD
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

=======

use yii\helpers\Url;

?>

<div id="content">
    <?php foreach ($posts as $post): ?>
        <h1><a href="<?= Url::to(['post/post', 'id' => $post->id]) ?>"><?= $post->title ?></a></h1>
        <?= $post->date_creation ?>
        <br />
        <?= $post->text ?>
        <br />
        <a href="<?= Url::to(['post/post', 'id' => $post->id]) ?>">Читать дальше</a>
        <hr />
    <?php endforeach; ?>
</div>
>>>>>>> upstream/dev
