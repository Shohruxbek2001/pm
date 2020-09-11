<?php

use dosamigos\tinymce\TinyMce;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container-fluid">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6">
            <?= $form->field($model, 'alias')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <?= $form->field($model, 'product_name_oz')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <?= $form->field($model, 'product_name_eng')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6">
            <?= $form->field($model, 'product_name_ru')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <?php
            $catalog = \app\models\Catalog::find()->all();
            try {
                echo $form->field($model, 'catalog_id')->widget(Select2::classname(), [
                    'data' => ArrayHelper::map($catalog, 'catalog_id', 'catalog_name_ru'),
                    'options' => ['placeholder' => 'Mahsulot toifasini  tanlang...'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]);
            } catch (Exception $e) {
            }
            ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <?php
            $category = \app\models\Category::find()->all();
            try {
                echo $form->field($model, 'category_id')->widget(Select2::classname(), [
                    'data' => ArrayHelper::map($category, 'category_id', 'category_name_ru'),
                    'options' => ['placeholder' => 'Mahsulot toifasini  tanlang...'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]);
            } catch (Exception $e) {
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6">
            <?php
            $goods = \app\models\Goods::find()->all();
            try {
                echo $form->field($model, 'goods_id')->widget(Select2::classname(), [
                    'data' => ArrayHelper::map($goods, 'goods_id', 'name_ru'),
                    'options' => ['placeholder' => 'Mahsulot materialini  tanlang...'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]);
            } catch (Exception $e) {
            }
            ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <?php
            $state = \app\models\State::find()->all();
            try {
                echo $form->field($model, 'state_id')->widget(Select2::classname(), [
                    'data' => ArrayHelper::map($state, 'state_id', 'state_ru'),
                    'options' => ['placeholder' => 'Davlat toifasini tanlang...'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]);
            } catch (Exception $e) {
            }
            ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <?php
            $brand = \app\models\Brand::find()->all();
            try {
                echo $form->field($model, 'brand_id')->widget(Select2::classname(), [
                    'data' => ArrayHelper::map($brand, 'brand_id', 'brand_ru'),
                    'options' => ['placeholder' => 'Mahsulot toifasini tanlang...'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]);
            } catch (Exception $e) {
            }
            ?>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <?= $form->field($model, 'details_oz')->widget(TinyMce::className(), [
            'options' => ['rows' => 17],
            'language' => 'ru',
            'clientOptions' => [
                'plugins' => [
                    "advlist autolink lists link charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
            ]
        ]); ?>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <?= $form->field($model, 'details_eng')->widget(TinyMce::className(), [
            'options' => ['rows' => 17],
            'language' => 'ru',
            'clientOptions' => [
                'plugins' => [
                    "advlist autolink lists link charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
            ]
        ]); ?>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <?= $form->field($model, 'details_ru')->widget(TinyMce::className(), [
            'options' => ['rows' => 17],
            'language' => 'ru',
            'clientOptions' => [
                'plugins' => [
                    "advlist autolink lists link charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
            ]
        ]); ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
        <?= $form->field($model, 'price_name_oz')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
        <?= $form->field($model, 'price_name_eng')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
        <?= $form->field($model, 'price_name_ru')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
        <?= $form->field($model, 'no_discount_oz')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
        <?= $form->field($model, 'no_discount_eng')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
        <?= $form->field($model, 'no_discount_ru')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
        <?= $form->field($model, 'image1')->fileInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
        <?= $form->field($model, 'image2')->fileInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
        <?= $form->field($model, 'image3')->fileInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
        <?= $form->field($model, 'image4')->fileInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
        <?= $form->field($model, 'status')->dropDownList(['Enable' => 'Enable', 'Disable' => 'Disable',], ['prompt' => '']) ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
        <?= $form->field($model, 'height')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
        <?= $form->field($model, 'length')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
        <?= $form->field($model, 'evaluation')->textInput() ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
        <?= $form->field($model, 'width')->textInput() ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="form-group">
            <?= Html::submitButton('Saqlash <i class="glyphicon glyphicon-save"></i>', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>
