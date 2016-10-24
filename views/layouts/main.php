<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
use pistol88\cart\widgets\BuyButton;
use pistol88\cart\widgets\TruncateButton;
use pistol88\cart\widgets\CartInformer;
use pistol88\cart\widgets\ElementsList;
use pistol88\cart\widgets\DeleteButton;
use pistol88\cart\widgets\ChangeCount;
use pistol88\cart\widgets\ChangeOptions;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <!--- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Time To Fish</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media-queries.css">
<!--    <link rel="stylesheet" href="css/materialize.min.css">-->
    <link rel="stylesheet" href="css/materialize.css">

    <!-- Script
    =================================================== -->
<!--    <script src="js/modernizr.js"></script>-->

    <!-- Favicons
     =================================================== -->
    <link rel="shortcut icon" href="favicon.png" >
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>
<body class="homepage">
<?php $this->beginBody() ?>

<!-- Header
=================================================== -->
<header id="main-header">

    <div class="row header-inner">

        <div class="logo">
            <?php
            $cart = yii::$app->cart;
            if ((Yii::$app->controller->id == 'site') and (Yii::$app->controller->action->id == 'index'))  {
            ?>
            <a class="smoothscroll" style="width: 200px; margin: -15px 20px 0 0" href="<?= Url::toRoute('/site/index');?>#hero"><img  src="images/logo.png"></a>
            <?php } else { ?>
                <a class="" style="width: 200px; margin: -15px 24px 0 0" href="<?= Yii::$app->homeUrl;?>"><img  src="images/logo.png"></a>
            <?php } ?>
        </div>

        <nav id="nav-wrap">

            <a class="mobile-btn" href="#nav-wrap" title="Show navigation">
                <span class='menu-text'>Show Menu</span>
                <span class="menu-icon"></span>
            </a>
            <a class="mobile-btn" href="#" title="Hide navigation">
                <span class='menu-text'>Hide Menu</span>
                <span class="menu-icon"></span>
            </a>
            <?php
            if ((Yii::$app->controller->id == 'site') and (Yii::$app->controller->action->id == 'index'))  {
              ?>
                <ul id="nav" class="nav">
                <li class="current"><a class="smoothscroll" href="#hero">Главная</a></li>
                <li><a class="smoothscroll" href="#portfolio">Топ продаж</a></li>
                <li><a class="smoothscroll" href="#services">Рецепты</a></li>
                <li><a class="smoothscroll" href="#about">Каталог</a></li>
                <li><a class="smoothscroll" href="#journal">Доставка и оплата</a></li>
                <li><a class="smoothscroll" href="#contact">Контакты</a></li>
                <li style=""><a href="<?= Url::toRoute('site/cart'); ?>"><i style="color: #604e7e; font-size: 17pt;" class="material-icons">shopping_cart</i></a><span style="margin-top: 20px;" class="new badge"><?= $cart->getCount() ?></span></li>
            </ul>
            <?php } else {?>
            <ul id="nav" class="nav">
                <li <?php if ((Yii::$app->controller->id == 'site') and (Yii::$app->controller->action->id == 'index')) echo 'class="current"'?>><a class="" href="<?= Url::toRoute('/site/index');?>#hero">Главная</a></li>
                <li><a class="" href="<?= Url::toRoute('/site/index');?>#portfolio">Топ продаж</a></li>
                <li <?php if ((Yii::$app->controller->id == 'site') and (Yii::$app->controller->action->id == 'about')) echo 'class="current"'?>><a class="" href="<?= Url::toRoute('/site/index');?>#services">Рецепты</a></li>
                <li><a class="" href="<?= Url::toRoute('/site/index');?>#about">Каталог</a></li>
                <li><a class="" href="<?= Url::toRoute('/site/index');?>#journal">Доставка и оплата</a></li>
                <li><a class="" href="<?= Url::toRoute('/site/index');?>#contact">Контакты</a></li>
                <li style=""><a href="<?= Url::toRoute('site/cart'); ?>"><i style="color: #604e7e; font-size: 17pt;" class="material-icons">shopping_cart</i></a><span style="margin-top: 20px; font-size: 1em" class="new badge"><?= $cart->getCount() ?></span></li>
            </ul>
            <?php } ?>

        </nav> <!-- /nav-wrap -->

    </div> <!-- /header-inner -->

</header>


        <?= $content ?>
   


<!-- Footer
================================================== -->
<footer>

    <div class="row">

        <div class="six columns tab-whole footer-about">

            <h3>About Puremedia</h3>

            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                nibh id elit.
            </p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.</p>

        </div> <!-- /footer-about -->

        <div class="six columns tab-whole right-cols">

            <div class="row">

                <div class="columns">
                    <h3 class="address">Contact Us</h3>
                    <p>
                        1600 Amphitheatre Parkway<br>
                        Mountain View, CA<br>
                        94043 US
                    </p>

                    <ul>
                        <li><a href="tel:6473438234">647.343.8234</a></li>
                        <li><a href="tel:1234567890">123.456.7890</a></li>
                        <li><a href="mailto:someone@puremedia.com">someone@puremedia.com</a></li>
                    </ul>
                </div> <!-- /columns -->

                <div class="columns last">
                    <h3 class="contact">Follow Us</h3>

                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">GooglePlus</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Flickr</a></li>
                        <li><a href="#">Skype</a></li>
                    </ul>

                </div> <!-- /columns -->

            </div> <!-- /Row(nested) -->

        </div>

        <p class="copyright">&copy; Copyright 2014 Puremedia. Design by <a href="http://www.styleshout.com/">Styleshout.</a></p>

        <div id="go-top">
            <a class="smoothscroll" title="Back to Top" href="#hero"><span>Top</span><i class="fa fa-long-arrow-up"></i></a>
        </div>

    </div> <!-- /row -->

</footer> <!-- /footer -->



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42137233-6', 'auto');
  ga('send', 'pageview');

</script>
