<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CategoryType */

$this->title = 'Xona toifasini o\'zgartirish: ' . $model->category_type_id;
$this->params['breadcrumbs'][] = ['label' => 'Category Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->category_type_id, 'url' => ['view', 'id' => $model->category_type_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container-fluid">

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
