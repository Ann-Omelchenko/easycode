<?php
use yii\helpers\Html;
//use yii\widgets\LinkPager;

use yii\data\Pagination;
/* @var $this yii\web\View */

$this->title = 'My project';
?>

<div class="site-index">
    <h1>
        <?= 'Hello  '. Yii::$app->user->identity->username. '!' ?>
    </h1>
</div>
<hr />

<?php foreach ($categories as $category):?>
    <?= Html::a($category->name,['site/index', 'category_id' => $category->id], ['class' => 'btn btn-primary']) ?>
<?php endforeach;?>
<hr />


<?php foreach ($allPosts as $post): ?>
    <div>
        <b>
        <?= $post->title ?>
        </b>
        <br />
        <?= $post->date_creation ?>
        <p>
            <i>
            <?= $post->text ?>
            </i>
        </p>
        <p>
            <?php foreach ($post->tags as $tag): ?>
                <?= Html::a($tag->name, ['site/index', 'tag_id' => $tag->id]) ?>
            <?php endforeach;?>
        </p>
    </div>
    <hr />
<?php endforeach; ?>

<h3>Отзывы о сайте:</h3>
<?php foreach ($allGuestbooks as $guestbook): ?>
    <div>
        <b>
        <?= $guestbook->name ?> </b> ... <?= date('d.m.Y / H:i', strtotime($guestbook->date_creation )); ?>
        <br />
        <?= $guestbook->text ?>
        <br>
        <?php if ($guestbook->img): ?>
        <img src=" <?= $guestbook->getPathToImage() ?>" width="150px" height="150px">
        <?php endif; ?>
    </div>
<?php endforeach; ?>
<hr />


<?php
/*
foreach ($allPosts as $post) {
   echo $post->text;
    // отображаем здесь $model
}

// отображаем ссылки на страницы
echo LinkPager::widget([
    'pagination' => $pages,
]);
*/
?>
