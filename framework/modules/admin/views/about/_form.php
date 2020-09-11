<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\About */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container-fluid">
    <div class="row">

        <?php $form = ActiveForm::begin(); ?>

        <div class="col-lg-4 col-md-4 col-sm-6">
            <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <?= $form->field($model, 'home_number')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <?= $form->field($model, 'ofice_number')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <?= $form->field($model, 'detals')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <?= Html::submitButton('Saqlash <i class="glyphicon glyphicon-save"></i>', ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
