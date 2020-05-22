<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/font-awesome.min.css',
        'css/animate.css',
        'css/magnific-popup.css',
        'css/owl.carousel.min.css',
        'css/isotop.css',
        'css/xsIcon.css',
        'css/responsive.css',
        'css/style.css',
        'css/bootstrap.min.css',
    ];
    public $js = [
        'js/jquery.js',
        'js/popper.min.js',
        'js/bootstrap.min.js',
        'js/jquery.jCounter.js',
        'js/jquery.appear.min.js',
        'js/jquery.magnific-popup.min.js',
        'js/owl.carousel.min.js',
        'js/wow.min.js',
        'js/isotope.pkgd.min.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
