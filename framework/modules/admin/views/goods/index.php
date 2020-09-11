<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Search\GoodsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Materiyallar ro\'yxati';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">

    <h2><?= Html::encode($this->title) ?></h2>

    <p>
        <?= Html::a('Materiyal qo\'shish <i class="glyphicon glyphicon-plus"></i>', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'goods_id',
            'name_oz',
            'name_eng',
            'name_ru',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
