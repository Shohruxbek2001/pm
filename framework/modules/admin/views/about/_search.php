<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Search\AboutSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container-fluid">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'about_id') ?>

    <?= $form->field($model, 'phone_number') ?>

    <?= $form->field($model, 'home_number') ?>

    <?= $form->field($model, 'ofice_number') ?>

    <?= $form->field($model, 'detals') ?>

    <div class="form-group">
        <?= Html::submitButton('Qidirish <i class="glyphicon glyphicon-search"></i>', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Takror', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
