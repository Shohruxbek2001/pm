<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = $model->product_id;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container-fluid">

    <h2><?= Html::encode($this->title) ?></h2>

    <p>
        <?= Html::a('O\'zgartirish <i class="glyphicon glyphicon-edit"></i>', ['update', 'id' => $model->product_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('O\'chirish <i class="glyphicon glyphicon-trash"></i>', ['delete', 'id' => $model->product_id], [
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
            'product_id',
            'alias',
            'product_name_oz',
            'product_name_eng',
            'product_name_ru',
            'catalog_id',
            'category_id',
            'goods_id',
            'state_id',
            'brand_id',
            'details_oz:ntext',
            'details_eng:ntext',
            'details_ru:ntext',
            'price_name_oz',
            'price_name_eng',
            'price_name_ru',
            'no_discount_oz',
            'no_discount_eng',
            'no_discount_ru',
            [
                'attribute' => 'image1',
                'label' => 'Surat1',
                'format' => 'html',
                'contentOptions' => ['style' => 'width: 15%;'],
                'value' => function ($data) {
                    $url = \Yii::getAlias(Yii::$app->request->baseUrl . '/uploads/product/') . $data['image1'];
                    return Html::img($url, ['alt' => 'No Image', 'width' => '50', 'height' => '50']);
                }
            ],
            [
                'attribute' => 'image2',
                'label' => 'Surat2',
                'format' => 'html',
                'contentOptions' => ['style' => 'width: 15%;'],
                'value' => function ($data) {
                    $url = \Yii::getAlias(Yii::$app->request->baseUrl . '/uploads/product/') . $data['image2'];
                    return Html::img($url, ['alt' => 'No Image', 'width' => '50', 'height' => '50']);
                }
            ],
            [
                'attribute' => 'image3',
                'label' => 'Surat3',
                'format' => 'html',
                'contentOptions' => ['style' => 'width: 15%;'],
                'value' => function ($data) {
                    $url = \Yii::getAlias(Yii::$app->request->baseUrl . '/uploads/product/') . $data['image3'];
                    return Html::img($url, ['alt' => 'No Image', 'width' => '50', 'height' => '50']);
                }
            ],
            [
                'attribute' => 'image4',
                'label' => 'Surat4',
                'format' => 'html',
                'contentOptions' => ['style' => 'width: 15%;'],
                'value' => function ($data) {
                    $url = \Yii::getAlias(Yii::$app->request->baseUrl . '/uploads/product/') . $data['image4'];
                    return Html::img($url, ['alt' => 'No Image', 'width' => '50', 'height' => '50']);
                }
            ],
            'status',
            'height',
            'length',
            'width',
            'evaluation',
        ],
    ]) ?>

</div>
