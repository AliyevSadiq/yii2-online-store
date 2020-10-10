<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="product-view">



    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
           // 'category_id',
            [
                'attribute'=>'category_id',
                'value'=>$model->category->title
            ],
            'title',
            'content:html',
            'price',
            'old_price',
            'description',
            'keywords',
            //'img',
            [
             'attribute'=>'img',
             'value'=>'/web/'.$model->img,
             'format'=>['image',['alt'=>$model->title,'width'=>'100px']]
            ],
            'is_offer',
        ],
    ]) ?>

</div>
