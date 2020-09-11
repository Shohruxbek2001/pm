<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Basic */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container-fluid">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <?= $form->field($model, 'details')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <?= $form->field($model, 'image')->fileInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Saqlash <i class="glyphicon glyphicon-save"></i>', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
