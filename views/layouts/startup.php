<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\StartupAssets;
use yii\helpers\Html;
use yii\helpers\Url;

StartupAssets::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<?php $this->registerCsrfMetaTags() ?>
<?php $this->head() ?>
<title><?= Html::encode($this->title) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Startup Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script>
    addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
</script>

    <!-- Web-Fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext"
                                    rel="stylesheet">
    <!-- //Web-Fonts -->
</head>
<?php $this->beginBody() ?>
<body>
<!-- main banner -->
<div class="main-top" id="home">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="header d-lg-flex justify-content-between align-items-center py-3 px-sm-3">
                <!-- logo -->
                <div id="logo">
                    <h1><a href=<?=Url::to('/startup')?>><span class="fa fa-linode mr-2"></span>Startup</a></h1>
                </div>
                <!-- //logo -->
                <!-- nav -->
                <div class="nav_w3ls">
                    <nav>
                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li><a href=<?=Url::to('/startup')?> class="active">Home</a></li>
                            <li><a href=<?=Url::to('/startup/about')?>>About Us</a></li>
                            <li>
                                <!-- First Tier Drop Down -->
                                <label for="drop-2" class="toggle toogle-2">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
                                </label>
                                <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                <input type="checkbox" id="drop-2" />
                                <ul>
                                    <li><a href="#services" class="drop-text">Services</a></li>
                                    <li><a href=<?=Url::to('/startup/faq')?> class="drop-text">Faq's</a></li>
                                    <li><a href=<?=Url::to('/startup/404')?> class="drop-text">404</a></li>
                                    <li><a href="#stats" class="drop-text">Statistics</a></li>
                                    <li><a href=<?=Url::to('/startup/about')?> class="drop-text">Why Choose Us?</a></li>
                                    <li><a href=<?=Url::to('/startup/about')?> class="drop-text">Our Team</a></li>
                                    <li><a href="#partners" class="drop-text">Partners</a></li>
                                </ul>
                            </li>
                            <li><a href=<?=Url::to('/startup/contact')?>>Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- //nav -->
                <div class="d-flex mt-lg-1 mt-sm-2 mt-3 justify-content-center">
                    <!-- search -->
                    <div class="search-w3layouts mr-3">
                        <form action="#" method="post" class="search-bottom-wthree d-flex">
                            <input class="search" type="search" placeholder="Search Here..." required="">
                            <button class="form-control btn" type="submit"><span class="fa fa-search" ></span></button>
                        </form>
                    </div>
                    <!-- //search -->
                    <!-- download -->
                    <a class="dwn-w3ls btn" href="http://w3layouts.com/" target="_blank">
                        <span class="fa fa-cloud-download"></span>
                    </a>
                    <!-- //download -->
                </div>
            </div>
        </div>
    </header>


    <!-- content-starts-here -->
    <?php echo $content; ?>
    <!--footer section start-->

<!-- footer -->
<footer class="bg-li py-5">
    <div class="container py-xl-5 py-lg-3">
        <!-- subscribe -->
        <div class="subscribe mx-auto">
            <div class="icon-effect-w3">
                <span class="fa fa-envelope"></span>
            </div>
            <h2 class="tittle text-center font-weight-bold">Stay Updated!</h2>
            <p class="sub-tittle text-center mt-3 mb-sm-5 mb-4">Sed do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            <form action="#" method="post" class="subscribe-wthree pt-2">
                <div class="d-flex subscribe-wthree-field">
                    <input class="form-control" type="email" placeholder="Enter your email..." name="email" required="">
                    <button class="btn form-control w-50" type="submit">Subscribe</button>
                </div>
            </form>
        </div>
        <!-- //subscribe -->
    </div>
</footer>
<!-- //footer -->
<!-- copyright bottom -->
<div class="copy-bottom bg-li py-4 border-top">
    <div class="container-fluid">
        <div class="d-md-flex px-md-3 position-relative text-center">
            <!-- footer social icons -->
            <div class="social-icons-footer mb-md-0 mb-3">
                <ul class="list-unstyled">
                    <li>
                        <a href="#">
                            <span class="fa fa-facebook"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-twitter"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-google-plus"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-instagram"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- //footer social icons -->
            <!-- copyright -->
            <div class="copy_right mx-md-auto mb-md-0 mb-3">
                <p class="text-bl let">© 2019 Startup. All rights reserved | Design by
                    <a href="http://w3layouts.com/" target="_blank">W3layouts</a>
                </p>
            </div>
            <!-- //copyright -->
            <!-- move top icon -->
            <a href="#home" class="move-top text-center">
                <span class="fa fa-level-up" aria-hidden="true"></span>
            </a>
            <!-- //move top icon -->
        </div>
    </div>
</div>
<!-- //copyright bottom -->

</body>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>