<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="banner">
    <div class="w31_banner_nav_right">
    <h1><?= Html::encode($this->title) ?></h1>
  <div>
    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>
    </div>
    </div>


</div>
<div class="clear-fix"></div>