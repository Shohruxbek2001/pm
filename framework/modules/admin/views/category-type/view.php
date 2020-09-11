<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CategoryType */

$this->title = $model->category_type_id;
$this->params['breadcrumbs'][] = ['label' => 'Category Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container-fluid">

    <h2><?= Html::encode($this->title) ?></h2>

    <p>
        <?= Html::a('O\'zgartirish <i class="glyphicon glyphicon-edit"></i>', ['update', 'id' => $model->category_type_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('O\'chirish <i class="glyphicon glyphicon-trash"></i>', ['delete', 'id' => $model->category_type_id], [
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
            'category_type_id',
            'category_type_oz',
            'category_type_eng',
            'category_type_ru',
            [
                'attribute' => 'image',
                'label' => 'Surat',
                'format' => 'html',
                'contentOptions' => ['style' => 'width: 15%;'],
                'value' => function ($data) {
                    $url = \Yii::getAlias(Yii::$app->request->baseUrl . '/uploads/category_type/') . $data['image'];
                    return Html::img($url, ['alt' => 'No Image', 'width' => '50', 'height' => '50']);
                }
            ],            'alias',
        ],
    ]) ?>

</div>
