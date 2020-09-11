<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Search\CategoryTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Xonalar toifasi ro\'yxati';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">

    <h2><?= Html::encode($this->title) ?></h2>

    <p>
        <?= Html::a('Xona qo\'shish <i class="glyphicon glyphicon-plus"></i>', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'category_type_id',
            'category_type_oz',
            'category_type_eng',
            'category_type_ru',
            'alias',
            [
                'attribute'=>'image',
                'label'=>'surat',
                'format'=>'html',
                'contentOptions'=>['style'=>'width:15%;'],
                'value'=>function($data){
                    $url = \Yii::getAlias(Yii::$app->request->baseUrl . '/uploads/category_type/') . $data['image'];
                    return Html::img($url, ['alt' => 'No Image', 'width' => '50', 'height' => '50']);
                }
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
