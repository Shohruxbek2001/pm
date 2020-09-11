<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\About */

$this->title = $model->about_id;
$this->params['breadcrumbs'][] = ['label' => 'Abouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container-fluid">

    <h2><?= Html::encode($this->title) ?></h2>

    <p>
        <?= Html::a('O\'zgartirish <i class="glyphicon glyphicon-edit"></i>', ['update', 'id' => $model->about_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('O\'chirish <i class="glyphicon glyphicon-trash"></i>', ['delete', 'id' => $model->about_id], [
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
            'about_id',
            'phone_number',
            'home_number',
            'ofice_number',
            'detals',
        ],
    ]) ?>

</div>
