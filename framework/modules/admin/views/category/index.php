<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Search\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mahsulot toifasi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">

    <h2><?= Html::encode($this->title) ?></h2>

    <p>
        <?= Html::a('Mahsulot toifasini qo\'shish <i class="glyphicon glyphicon-plus"></i>', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'category_id',
            'category_name_oz',
            'category_name_eng',
            'category_name_ru',
            'alias',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
