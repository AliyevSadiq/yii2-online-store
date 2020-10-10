<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Category */
/* @var $form yii\widgets\ActiveForm */




?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //= $form->field($model, 'parent_id')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <div class="form-group field-category-parent_id has-success">

        <label class="control-label" for="category-parent_id">Parent Category</label>
            <select id="category-parent_id" class="form-control" name="Category[parent_id]" >
                <option value="0">Main Cateegory</option>
                <?php echo \app\components\widgets\MenuWidget::widget(
                        [
                         'tpl'=>'select',
                         'model'=>$model,
                         'cache_time'=>0
                        ]
                )?>
            </select>
            <div><div class="help-block"></div></div>
    </div>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
