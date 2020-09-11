<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\State */

$this->title = $model->state_id;
$this->params['breadcrumbs'][] = ['label' => 'States', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container-fluid">

    <h2><?= Html::encode($this->title) ?></h2>

    <p>
        <?= Html::a('O\'zgaertirish <i class="glyphicon glyphicon-edit"></i>', ['update', 'id' => $model->state_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('O\'chirish <i class="glyphicon glyphicon-trash"></i>', ['delete', 'id' => $model->state_id], [
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
            'state_id',
            'state_oz',
            'state_eng',
            'state_ru',
        ],
    ]) ?>

</div>
