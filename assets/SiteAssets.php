<?php
namespace app\assets;
use yii\web\AssetBundle;

class SiteAssets extends AssetBundle{
//    public $basePath = '@webroot';
    public $baseUrl = '@web/sitefile';

    public $css = [

        'css/bootstrap-select.css',
        'css/style.css',
        'css/flexslider.css',
        'css/font-awesome.min.css',
        'css/jquery.uls.grid.css',
        'css/jquery.uls.css',
        'css/jquery.uls.lcd.css',

    ];

    public $js = [
//        'js/jquery.min.js',
//        'js/bootstrap.min.js',
        'js/bootstrap-select.js',
        'js/jquery.leanModal.min.js',
        'js/jquery.uls.data.js',
        'js/jquery.uls.data.utils.js',
        'js/jquery.uls.lcd.js',
        'js/jquery.uls.languagefilter.js',
        'js/jquery.uls.regionfilter.js',
        'js/jquery.uls.core.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
