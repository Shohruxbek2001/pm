<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Search\CatalogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mahsulot turlari ro\'yxati ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">

    <h2><?= Html::encode($this->title) ?></h2>

    <p>
        <?= Html::a('Mahsulot turini qo\'shish <i class="glyphicon glyphicon-plus"></i>', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'catalog_id',
            'catalog_name_oz',
            'catalog_name_eng',
            'catalog_name_ru',
            'category_type_id',
            //'alias',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
