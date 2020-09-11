<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Basic */

$this->title = 'Mahsulotni o\'zgartirish: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Basics', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->basic_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container-fluid">

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
