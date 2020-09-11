<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\State */

$this->title = 'Davlat qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'States', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
