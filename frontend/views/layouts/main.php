<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <!-- mian-content -->
    <div class="main-banner" id="home">
        <!-- header -->
        <header class="header">
            <div class="container-fluid px-lg-5">
                <!-- nav -->
                <nav class="py-4">
                    <div id="logo">
                        <h1><a href="<?= \yii\helpers\Url::to(['site/index'])?>">SpotLight</a></h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-2">
                        <li><a href="<?= \yii\helpers\Url::to(['site/index'])?>">Home</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/about'])?>">About</a></li>
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Gallery<span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                            <a href="#">Gallery <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                <li><a href="<?= \yii\helpers\Url::to(['/photos'])?>">Photos</a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['/videos'])?>">Videos</a></li>
                            </ul>
                        </li>
                        <li><a href="<?= \yii\helpers\Url::to(['/contact'])?>">Contact</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/signup'])?>">Sign Up</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/login'])?>">Login</a></li>

                    </ul>
                </nav>
                <!-- //nav -->
            </div>
        </header>
        <!-- //header -->
    </div>
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>


    <!--footer -->
    <footer>
        <section class="footer footer_1its py-5">
            <div class="container py-md-4">
                <div class="row footer-top mb-md-5 mb-4">
                    <div class="col-lg-4 col-md-6 footer-grid_section_1its">
                        <div class="footer-title-w3ls">
                            <h3>Address</h3>
                        </div>
                        <div class="footer-text">
                            <p>Address : 1234 lock, Charlotte, North Carolina, United States</p>
                            <p>Phone : +12 534894364</p>
                            <p>Email : <a href="mailto:info@example.com">info@example.com</a></p>
                            <p>Fax : +12 534894364</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4 footer-grid_section_1its">
                        <div class="footer-title-w3ls">
                            <h3>Catch On</h3>
                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit volup</p>
                        <ul class="social_section_1info">
                            <li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook mr-1"></span>facebook</a></li>
                            <li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter mr-1"></span>twitter</a></li>
                            <li class="google"><a href="#"><span class="fa fa-google-plus mr-1"></span>google</a></li>
                            <li class="linkedin"><a href="#"><span class="fa fa-linkedin mr-1"></span>linkedin</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4 footer-grid_section_1its">
                        <div class="footer-title-w3ls">
                            <h3>Pages</h3>
                        </div>
                        <p><a href="<?= \yii\helpers\Url::to(['site/index'])?>">Home</a></p>
                        <p><a href="<?= \yii\helpers\Url::to(['/about'])?>">About</a></p>
                        <p><a href="<?= \yii\helpers\Url::to(['/gallery'])?>">Gallery</a></p>
                        <p><a href="<?= \yii\helpers\Url::to(['/signup'])?>">SignUp</a></p>
                        <p><a href="<?= \yii\helpers\Url::to(['/login'])?>">Login</a></p>
                    </div>
                </div>

                <div class="move-top-w3layouts text-center mt-3">
                    <a href="#home" class="move-top"> <span class="fa fa-angle-up  mb-3" aria-hidden="true"></span></a>
                </div>

            </div>
        </section>
    </footer>
    <!-- //footer -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
