<?php
    use yii\helpers\Url;
?>
<div class="container">
    <div class="row">
        <h1 class="alert alert-danger">
            Bu ImagesFamily page
        </h1>
        <a href="<?=Url::to(['site/index'])?>">Back to the index page</a>
        <img src="<?=Url::base().'/images/1.jpg'?>" alt="Bu mening rasmlarimdan biri edi">
    </div>
</div>