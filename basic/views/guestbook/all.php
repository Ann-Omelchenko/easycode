<?php
use yii\helpers\Html;

?>


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