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
class FrontendAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

        'design/frontend/css/animate.css',
        'design/frontend/css/bootstrap.min.css',
        'design/frontend/css/font-awesome.min.css',
        'design/frontend/css/jquery.fancybox.min.css',
        'design/frontend/css/magnific-popup.css',
        'design/frontend/css/owl.carousel.min.css',
        'design/frontend/fonts/icomoon/demo-files/demo.css',
        'design/frontend/fonts/icomoon/style.css',
        'design/frontend/css/default-assets/classy-nav.css',
        'design/frontend/css/default-assets/themify-icons.css',
        'design/frontend/style/style.css',
        'design/frontend/style.css',
        'design/frontend/style/main.css',
        'design/frontend/css/style.css',


    ];
    public $js = [
        'design/frontend/scripts/jquery-3.5.1.min.js',
        'design/frontend/scripts/slick.min.js',
        'design/frontend/scripts/main.js',
        'design/frontend/fonts/icomoon/demo-files/demo.js',

    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
