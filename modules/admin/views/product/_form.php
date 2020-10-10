<?php

use yii\helpers\Html;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

mihaildev\elfinder\Assets::noConflict($this);

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?//= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>


    <div class="form-group field-product-category_id has-success">

        <label class="control-label" for="product-category_id">Category</label>
        <select id="product-category_id" class="form-control" name="Product[category_id]" >

            <?php echo \app\components\widgets\MenuWidget::widget(
                [
                    'tpl'=>'select_product',
                    'model'=>$model,
                    'cache_time'=>0
                ]
            )?>
        </select>
        <div><div class="help-block"></div></div>
    </div>


    <?//= $form->field($model, 'content')->textarea(['rows' => 6]) ?>
   <?php //echo $form->field($model, 'content')->widget(CKEditor::class,[
//        'editorOptions' => [
//            'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
//            'inline' => false, //по умолчанию false
//
//        ],
//    ]);
  echo $form->field($model, 'content')->widget(CKEditor::class, [

       'editorOptions' => ElFinder::ckeditorOptions(['elfinder'],[/* Some CKEditor Options */]),
   ]);


    ; ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'old_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>
   <?php echo $form->field($model, 'file')->widget(FileInput::class, [
       'options' => ['accept' => 'image/*'],
   ]);?>
    <?= $form->field($model, 'is_offer')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
