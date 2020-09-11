<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class BackendAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'design/backend/bootstrap/dist/css/bootstrap.min.css',
        'design/backend/components/chartist-js/dist/chartist.min.css',
        'design/backend/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css',
        'design/backend/css/animate.css',
        'design/backend/css/style.css',
        'design/backend/css/colors/default.css',
        'design/backend/css/login.css',
    ];
    public $js = [
//        'design/backend/bootstrap/dist/js/bootstrap.min.js',
        'design/backend/js/jquery.slimscroll.js',
        'design/backend/js/waves.js',
        'design/backend/js/sidebarmenu.js',
        'design/backend/js/custom.js',
        'design/backend/components/chartist-js/dist/chartist.min.js',
        'design/backend/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js',
        'design/backend/components/sparkline/jquery.sparkline.min.js',
        'design/backend/components/sparkline/jquery.charts-sparkline.js',
        'design/backend/components/knob/jquery.knob.js',
        'design/backend/components/easypiechart/dist/jquery.easypiechart.min.js',
        'design/backend/js/db1.js',
        'design/backend/components/styleswitcher/jQuery.style.switcher.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
