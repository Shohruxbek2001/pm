<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Search\GoodsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container-fluid">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'goods_id') ?>

    <?= $form->field($model, 'name_oz') ?>

    <?= $form->field($model, 'name_eng') ?>

    <?= $form->field($model, 'name_ru') ?>

    <div class="form-group">
        <?= Html::submitButton('Qidirish <i class="glyphicon glyphicon-search"></i>', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Takror', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
