<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Search\CategoryTypeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container-fluid">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'category_type_id') ?>

    <?= $form->field($model, 'category_type_oz') ?>

    <?= $form->field($model, 'category_type_eng') ?>

    <?= $form->field($model, 'category_type_ru') ?>

    <?= $form->field($model, 'alias') ?>

    <?= $form->field($model, 'image') ?>

    <div class="form-group">
        <?= Html::submitButton('Qidirish <i class="glyphicon glyphicon-search"></i>', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Takror', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
