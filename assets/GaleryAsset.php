<?php

namespace app\assets;

use yii\web\AssetBundle;

class GaleryAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

        'css/themify-icons.css',
        'css/superfish.css',
        'css/easy-responsive-tabs.css',
        'css/fontawesome-all.min.css',
        'css/style.css',
        'css/galery.css',
    ];
    public $js = [
        'js/velocity.min.js',
        'js/velocity.ui.min.js',
        'js/main.js'
    ];
    public $depends = [
//        'yii\web\JQueryAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    public $jsOptions = ['position' => \yii\web\View::POS_END];
}
