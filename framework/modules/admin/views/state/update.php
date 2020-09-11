<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\State */

$this->title = 'Ma\'lumotni o\'zgartirish: ' . $model->state_id;
$this->params['breadcrumbs'][] = ['label' => 'States', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->state_id, 'url' => ['view', 'id' => $model->state_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container-fluid">

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
