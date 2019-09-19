<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\SiteAssets;
use yii\helpers\Html;
use yii\helpers\Url;

SiteAssets::register($this);
?>
<?php $this->beginPage() ?>
<html lang="<?= Yii::$app->language ?>">


<head>

    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<body>
<div class="header">
    <div class="container">
        <div class="logo">
            <a href=<?=Url::to('/hello/index')?> ><span>Re</span>sale</a>
        </div>
        <div class="header-right">
            <a class="account" href="login.html">My Account</a>
            <span class="active uls-trigger"><a href=<?=Url::to(['hello/categories'])?>>Categories</a></span>
            <span class="active uls-trigger"><a href=<?=Url::to(['hello/ajax'])?>>ajax</a></span>
            <span class="active uls-trigger"><a href=<?=Url::to(['hello/show'])?>>Show</a></span>

        </div>
    </div>
</div>

<!-- content-starts-here -->
<?php echo $content; ?>
<!--footer section start-->
<footer >

    <div class="footer-bottom text-center">
        <div class="container">
            <div class="footer-logo">
                <a href="index.html"><span>Re</span>sale</a>
            </div>
            <div class="footer-social-icons">
                <ul>
                    <li><a class="facebook" href="#"><span>Facebook</span></a></li>
                    <li><a class="twitter" href="#"><span>Twitter</span></a></li>
                    <li><a class="flickr" href="#"><span>Flickr</span></a></li>
                    <li><a class="googleplus" href="#"><span>Google+</span></a></li>
                    <li><a class="dribbble" href="#"><span>Dribbble</span></a></li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</footer>
<!--footer section end-->

</body>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
