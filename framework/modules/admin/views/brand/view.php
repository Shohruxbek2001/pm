<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Brand */

$this->title = $model->brand_id;
$this->params['breadcrumbs'][] = ['label' => 'Brands', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container-fluid">

    <h2><?= Html::encode($this->title) ?></h2>

    <p>
        <?= Html::a('O\'zgartirish <i class="glyphicon glyphicon-edit"></i>', ['update', 'id' => $model->brand_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('O\'chirish <i class="glyphicon glyphicon-trash"></i>', ['delete', 'id' => $model->brand_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Chindan ham ushbu ma\'lumotni o\'chirishni xohlaysizmi?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'brand_id',
            'brand_oz',
            'brand_eng',
            'brand_ru',
        ],
    ]) ?>
</div>
