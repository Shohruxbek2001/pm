<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\BackendAsset;

BackendAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <?php $this->registerCsrfMetaTags() ?>
    <link rel="shortcut icon" href="<?php echo Yii::$app->request->baseUrl; ?>/design/backend/favicon.png" type="image/x-icon">
    <title><?= Html::encode($this->title) ?>Mebel.uz</title>
    <?php $this->head() ?>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body class="mini-sidebar">
<?php $this->beginBody() ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6">
            <a class="btn btn-primary" href="<?= Yii::$app->urlManager->createUrl(['admin/brand']) ?>">Brendlar
                ro'yxati
            </a >
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <a class="btn btn-primary" href="<?= Yii::$app->urlManager->createUrl(['admin/goods']) ?>">Materiyallar
                ro'yxati
            </a >
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <a class="btn btn-primary" href="<?= Yii::$app->urlManager->createUrl(['admin/state']) ?>">Davlatlar
                ro'yxati
            </a >
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <a class="btn btn-primary" href="<?= Yii::$app->urlManager->createUrl(['admin/category']) ?>">Mahsulot
                toifasi ro'yxati
            </a >
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6">
            <a class="btn btn-primary" href="<?= Yii::$app->urlManager->createUrl(['admin/catalog']) ?>">
                Mahsulot turi ro'yxati
            </a >
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <a class="btn btn-primary"
               href="<?= Yii::$app->urlManager->createUrl(['admin/category-type']) ?>">Xonalar turi
                ro'yxati
            </a >
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <a class="btn btn-primary" href="<?= Yii::$app->urlManager->createUrl(['admin/about']) ?>">
                Do'kon ma'lumotlar ro'yxati
            </a >
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <a class="btn btn-primary" href="<?= Yii::$app->urlManager->createUrl(['admin/product']) ?>">
                Mahsulotlar ro'yxati
            </a >
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <a class="btn btn-primary" style="margin-top: 20px" href="<?= Yii::$app->urlManager->createUrl(['admin/basic']) ?>">
                Asosiy mahsulotlar
            </a >
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <a class="btn btn-danger" style="margin-top: 20px" href="<?= Yii::$app->urlManager->createUrl(['admin/default/logout']) ?>">
                Bosh sahifa
            </a >
        </div>
    </div>
</div>

<?=$content?>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/design/backend/components/jquery/dist/jquery.min.js"></script>
<!-- ===== Bootstrap JavaScript ===== -->
<script src="<?php echo Yii::$app->request->baseUrl; ?>/design/backend/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- ===== Slimscroll JavaScript ===== -->
<script src="<?php echo Yii::$app->request->baseUrl; ?>/design/backend/js/jquery.slimscroll.js"></script>
<!-- ===== Wave Effects JavaScript ===== -->
<script src="<?php echo Yii::$app->request->baseUrl; ?>/design/backend/js/waves.js"></script>
<!-- ===== Menu Plugin JavaScript ===== -->
<script src="<?php echo Yii::$app->request->baseUrl; ?>/design/backend/js/sidebarmenu.js"></script>
<!-- ===== Custom JavaScript ===== -->
<script src="<?php echo Yii::$app->request->baseUrl; ?>/design/backend/js/custom.js"></script>
<!-- ===== Plugin JS ===== -->
<script src="<?php echo Yii::$app->request->baseUrl; ?>/design/backend/components/chartist-js/dist/chartist.min.js"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/design/backend/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/design/backend/components/sparkline/jquery.sparkline.min.js"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/design/backend/components/sparkline/jquery.charts-sparkline.js"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/design/backend/components/knob/jquery.knob.js"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/design/backend/components/easypiechart/dist/jquery.easypiechart.min.js"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/design/backend/js/db1.js"></script>
<!-- ===== Style Switcher JS ===== -->
<script src="<?php echo Yii::$app->request->baseUrl; ?>/design/backend/components/styleswitcher/jQuery.style.switcher.js"></script>
<?php $this->endBody() ?>
</body>


</html>
<?php $this->endPage() ?>