<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CategoryType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container-fluid">
<div class="row">
    <?php $form = ActiveForm::begin(); ?>
    <div class="col-lg-3 col-md-3 col-sm-6">
        <?= $form->field($model, 'category_type_oz')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6">
        <?= $form->field($model, 'category_type_eng')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6">
        <?= $form->field($model, 'category_type_ru')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6">
        <?= $form->field($model, 'alias')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6">
        <?= $form->field($model, 'image')->fileInput(['maxlength' => true]) ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3"
    <div class="form-group">
        <?= Html::submitButton('Saqlash <i class="glyphicon glyphicon-save"></i>', ['class' => 'btn btn-success']) ?>
    </div>
</div>
    <?php ActiveForm::end(); ?>
</div>
