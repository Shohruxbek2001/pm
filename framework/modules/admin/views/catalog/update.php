<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Catalog */

$this->title = 'Mahsulot turini o\'zgartirish: ' . $model->catalog_id;
$this->params['breadcrumbs'][] = ['label' => 'Catalogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->catalog_id, 'url' => ['view', 'id' => $model->catalog_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container-fluid">

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
