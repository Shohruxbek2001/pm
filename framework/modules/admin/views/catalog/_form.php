<?php

use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Catalog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container-fluid">
    <div class="row">
        <?php $form = ActiveForm::begin(); ?>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <?= $form->field($model, 'catalog_name_oz')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <?= $form->field($model, 'catalog_name_eng')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <?= $form->field($model, 'catalog_name_ru')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <?php
            $category_type = \app\models\CategoryType::find()->all();
            try {
                echo $form->field($model, 'category_type_id')->widget(Select2::classname(), [
                    'data' => ArrayHelper::map($category_type, 'category_type_id', 'category_type_ru'),
                    'options' => ['placeholder' => 'Mahsulot toifasini tanlang...'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]);
            } catch (Exception $e) {
            }
            ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <?= $form->field($model, 'alias')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="form-group">
                <?= Html::submitButton('Saqlash <i class="glyphicon glyphicon-save"></i>', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
