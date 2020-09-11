<?php

/* @var $this yii\web\View */

use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;

$this->title = 'Mebel';

?>

<div class="container" id="loginbg">
    <div class="col-md-3"></div>
    <div class="col-md-6 logincard">
        <div class="col-md-12">
            <div class="col-md-4"></div>
            <div class="col-md-4">
               <h1>Login</h1>
            </div>
            <div class="col-md-4"></div>
        </div>
        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'layout' => 'horizontal',
            'fieldConfig' => [
            ],
        ]); ?>
        <div class="col-md-12">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <i class="glyphicon glyphicon-user"></i>
                <?= $form->field($model, 'username')->textInput()->label('') ?>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <i class="glyphicon glyphicon-lock"></i>
                <?= $form->field($model, 'password')->passwordInput()->label('') ?>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <?= Html::submitButton('Kirish', ['class' => 'btn btn-success loginbutton']); ?>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
<br>
<div class="copyright" style="position: absolute;top: 100%;left: 35%">
    <p>© 2020 Mebel.UZ. All rights reserved | Design by <a href="http://mebel.uz">Mebel.uz</a></p>
</div>
