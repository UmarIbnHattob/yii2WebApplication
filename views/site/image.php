<?php
    use yii\helpers\Url;
?>
<div class="container">
    <div class="row">
        <h1 class="alert alert-danger">
            BU Gallery nomli action
        </h1>
        <a href="<?=Url::to(['site/index'])?>">Back to the index page</a>
        <img src="<?=Url::base().'/images/1.jpg'?>" alt="Bu mening raslarimdan biri edi">
    </div>
</div>