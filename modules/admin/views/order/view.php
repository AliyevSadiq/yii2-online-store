<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */

$this->title = "Order №:".$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="order-view">



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
            'created_at',
            'updated_at',
            'qty',
            'total',
            [
                'attribute'=>'status',
                'value'=>$model->status ? '<span class="label label-success">Approved</span>'
                    : '<span class="label label-danger">Not Approved</span>',

                'format'=>'raw'

            ],
           // 'status',
            'name',
            'email:email',
            'phone',
            'address',
            'note:ntext',
        ],
    ]) ?>

</div>
<?php

$items=$model->orderProduct;



?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Products in Order</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th>ID</th>
                        <th>PRODUCT NAME</th>
                        <th>PRICE</th>
                        <th>QUANTITY</th>
                        <th>SUM</th>

                    </tr>

                    <?php foreach($items as $id => $item):?>
                        <tr>
                            <td><?php echo $item['product_id']?></td>
                            <td><?= $item['title']?></td>
                            <td><?= $item['price']?></td>
                            <td><?= $item['qty']?></td>
                            <td><?= $item['total']?></td>

                        </tr>
                    <?php endforeach?>
                    </tbody></table>
            </div>
            <!-- /.box-body -->

        </div>
    </div>
</div>
