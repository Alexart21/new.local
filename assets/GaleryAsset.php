<?php

namespace app\assets;

use yii\web\AssetBundle;

class GaleryAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
        'fontawesome/css/all.min.css',
        'css/top-menu.css',
        'css/galery.css',
    ];
    public $js = [
        'js/velocity.min.js',
        'js/velocity.ui.min.js',
        'js/scrollReveal.js',
        'js/main.js',
        'js/top-menu.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
    ];

    public $jsOptions = ['position' => \yii\web\View::POS_END];
}
