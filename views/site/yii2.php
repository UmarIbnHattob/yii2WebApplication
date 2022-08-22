<?php
    use yii\helpers\Url;
    use yii\helpers\Html;
?>

<div class="container">
    <div class="row">
        <h1 class="alert alert-danger">
            Bu Yii2  page
        </h1>
        <a href="<?=Url::to(['site/index'])?>">Back to the index page</a>
        <h1><?= $title;?></h1>
    </div>
</div>