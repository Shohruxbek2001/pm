<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Search\ProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container-fluid">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'product_id') ?>

    <?= $form->field($model, 'alias') ?>

    <?= $form->field($model, 'product_name_oz') ?>

    <?= $form->field($model, 'product_name_eng') ?>

    <?= $form->field($model, 'product_name_ru') ?>

    <?php // echo $form->field($model, 'catalog_id') ?>

    <?php // echo $form->field($model, 'category_id') ?>

    <?php // echo $form->field($model, 'goods_id') ?>

    <?php // echo $form->field($model, 'state_id') ?>

    <?php // echo $form->field($model, 'brand_id') ?>

    <?php // echo $form->field($model, 'details_oz') ?>

    <?php // echo $form->field($model, 'details_eng') ?>

    <?php // echo $form->field($model, 'details_ru') ?>

    <?php // echo $form->field($model, 'price_name_oz') ?>

    <?php // echo $form->field($model, 'price_name_eng') ?>

    <?php // echo $form->field($model, 'price_name_ru') ?>

    <?php // echo $form->field($model, 'no_discount_oz') ?>

    <?php // echo $form->field($model, 'no_discount_eng') ?>

    <?php // echo $form->field($model, 'no_discount_ru') ?>
    <?php // echo $form->field($model, 'image1') ?>

    <?php // echo $form->field($model, 'image2') ?>

    <?php // echo $form->field($model, 'image3') ?>

    <?php // echo $form->field($model, 'image4') ?>

    <?php // echo $form->field($model, 'height') ?>
    <?php // echo $form->field($model, 'width') ?>

    <?php // echo $form->field($model, 'length') ?>

    <?php // echo $form->field($model, 'evaluation') ?>

    <div class="form-group">
        <?= Html::submitButton('Qidirish <i class="glyphicon glyphicon-search"></i>', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Takror', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
