<?php
namespace app\assets;
use yii\web\AssetBundle;

class StartupAssets extends AssetBundle{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [

        'css/style.css',
        'css/font-awesome.min.css',
        'css/jquery.motionCaptcha.0.2.css',

    ];

    public $js = [
        'js/jquery.mask.js',
        'js/jquery.motionCaptcha.0.2.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];

}
