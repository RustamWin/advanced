<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use app\models\About;
use app\models\Config;

AppAsset::register($this);
$action = Yii::$app->controller->action->id;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <div class="container">
            <div class="header row">
                <div class="col-md-12">
                    <div class="navbar">
                        <div class="navbar-inner">

                            <h1>
                                <a class="brand" href="<?=Yii::$app->urlManager->createUrl(["site/index"])?>">Andia - a super cool design agency...</a>
                            </h1>
                            <div class="nav-header nav-collapse">
                                <ul class="nav pull-right">
                                    <li <?php if ($action == "index") { ?> class="current-page"<?php } ?>>
                                        <a href="<?=Yii::$app->urlManager->createUrl(["site/index"])?>"><i class="fa fa-home"></i><br />Home</a>
                                    </li>
                                    <li <?php if ($action == "portfolio") { ?> class="current-page"<?php } ?>>
                                        <a href="<?=Yii::$app->urlManager->createUrl(["site/portfolio"])?>"><i class="fa fa-camera"></i><br />Portfolio</a>
                                    </li>
                                    <li <?php if ($action == "blog") { ?> class="current-page"<?php } ?>>
                                        <a rel="external" target="_blank" href="//blog.andia.com"><i class="fa fa-comments"></i><br />Blog</a>
                                    </li>
                                    <li <?php if ($action == "services") { ?> class="current-page"<?php } ?>>
                                        <a href="<?=Yii::$app->urlManager->createUrl(["site/services"])?>"><i class="fa fa-tasks"></i><br />Services</a>
                                    </li>
                                    <li <?php if ($action == "about") { ?> class="current-page"<?php } ?>>
                                        <a href="<?=Yii::$app->urlManager->createUrl(["site/about"])?>"><i class="fa fa-user"></i><br />About</a>
                                    </li>
                                    <li <?php if ($action == "contact") { ?> class="current-page"<?php } ?>>
                                        <a href="<?=Yii::$app->urlManager->createUrl(["site/contact"])?>"><i class="fa fa-envelope"></i><br />Contact</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?= $content ?>
    </div>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="widget col-md-3">
                <h4>About Us</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                <p><a href="<?=Yii::$app->urlManager->createUrl(["site/about"]) ?>">Read more...</a></p>
            </div>
            <div class="widget col-md-3">
                <h4>Latest Tweets</h4>
                <div class="show-tweets"></div>
            </div>
            <div class="widget col-md-3">
                <h4>Flickr Photos</h4>
                <ul class="flickr-feed"></ul>
            </div>
            <div class="widget col-md-3">
                <h4>Contact Us</h4>
                <p><i class="icon-map-marker"></i> Address: Via Principe Amedeo 9, 10100, Torino, TO, Italy</p>
                <p><i class="icon-phone"></i> Phone: 0039 333 12 68 347</p>
                <p><i class="icon-user"></i> Skype: Andia_Agency</p>
                <p><i class="icon-envelope-alt"></i> Email: <a href="">contact@andia.co.uk</a></p>
            </div>
        </div>
        <div class="footer-border"></div>
        <div class="row">
            <div class="copyright col-md-4">
                <p>Copyright <?=date('Y')?> Andia - All rights reserved. Template by <a href="http://azmind.com">Azmind</a>.</p>
            </div>
            <div class="social col-md-8">
                <a class="facebook" href=""></a>
                <a class="dribbble" href=""></a>
                <a class="twitter" href=""></a>
                <a class="pinterest" href=""></a>
            </div>
        </div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>