<?php
use yii\helpers\Html;
use app\models\Guestbook;
/* @var $this yii\web\View */

$this->title = 'My project';
?>

<?php foreach ($allGuestbooks as $guestbook): ?>
    <div>
        <?= $guestbook->name ?> |  <?= $guestbook->date_creation ?>
        <br />
        <?= $guestbook->text ?>
    </div>
<?php endforeach; ?>
<hr />

 <?= Html::a('Отзывы', ['guestbook/index', 'id' => $guestbook>id ], ['class' => 'profile-link']) ?>

<hr />
<div class="site-index">
        <h1>Hello !</h1>
</div>

<?php foreach ($categories as $category):?>
    <?= Html::a($category->name,['site/index', 'category_id' => $category->id], ['class' => 'btn btn-primary']) ?>
<?php endforeach;?>
<hr />


<?php foreach ($allPosts as $post): ?>
    <div>
        <?= $post->title ?> | <?= $post->category->name ?>
        <br />
        <?= $post->date_creation ?>
        <p>
            <?= $post->text ?>
        </p>
        <p>
            <?php foreach ($post->tags as $tag): ?>
                <?= Html::a($tag->name, ['site/index', 'tag_id' => $tag->id]) ?>
            <?php endforeach;?>
        </p>
    </div>
    <hr />
<?php endforeach; ?>


