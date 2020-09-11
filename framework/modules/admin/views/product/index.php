<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Search\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mahsulotlar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">

    <h2><?= Html::encode($this->title) ?></h2>

    <p>
        <?= Html::a('Mahsulot qo\'shish <i class="glyphicon glyphicon-plus"></i>', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'product_id',
            'alias',
            'product_name_oz',
            'product_name_eng',
            'product_name_ru',
            //'catalog_id',
            //'category_id',
            //'goods_id',
            //'state_id',
            //'brand_id',
            //'details_oz:ntext',
            //'details_eng:ntext',
            //'details_ru:ntext',
            //'price_name_oz',
            //'price_name_eng',
            //'price_name_ru',
            //'no_discount_oz',
            //'no_discount_eng',
            //'no_discount_ru',
            [
                'attribute'=>'image1',
                'label'=>'surat1',
                'format'=>'html',
                'contentOptions'=>['style'=>'width:15%;'],
                'value'=>function($data){
                    $url = \Yii::getAlias(Yii::$app->request->baseUrl . '/uploads/product/') . $data['image1'];
                    return Html::img($url, ['alt' => 'No Image', 'width' => '50', 'height' => '50']);
                }
            ],

//            ['attribute'=>'image2',
//        'label'=>'surat2',
//        'format'=>'html',
//        'contentOptions'=>['style'=>'width:15%;'],
//        'value'=>function($data){
//             $url = \Yii::getAlias(Yii::$app->request->baseUrl . '/uploads/product/') . $data['image2'];
//                    return Html::img($url, ['alt' => 'No Image', 'width' => '50', 'height' => '50']);
//                }
//            ],

//            ['attribute'=>'image3',
//        'label'=>'surat3',
//        'format'=>'html',
//        'contentOptions'=>['style'=>'width:15%;'],
//        'value'=>function($data){
//             $url = \Yii::getAlias(Yii::$app->request->baseUrl . '/uploads/product/') . $data['image3'];
//                    return Html::img($url, ['alt' => 'No Image', 'width' => '50', 'height' => '50']);
//                }
//            ],

//            ['attribute'=>'image4',
//        'label'=>'surat4',
//        'format'=>'html',
//        'contentOptions'=>['style'=>'width:15%;'],
//        'value'=>function($data){
//             $url = \Yii::getAlias(Yii::$app->request->baseUrl . '/uploads/product/') . $data['image4'];
//                    return Html::img($url, ['alt' => 'No Image', 'width' => '50', 'height' => '50']);
//                }
//            ],
        
            [
                'attribute'=>'status',
                'filter'=>array("Enable"=>"Enable","Disable"=>"Disable"),
            ],
            //'height',
            //'length',
            //'width',
            //'evaluation',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
