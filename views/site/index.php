<?php

use pistol88\cart\widgets\BuyButton;
use pistol88\cart\widgets\TruncateButton;
use pistol88\cart\widgets\CartInformer;
use pistol88\cart\widgets\ElementsList;
use pistol88\cart\widgets\DeleteButton;
use pistol88\cart\widgets\ChangeCount;
use pistol88\cart\widgets\ChangeOptions;

?>

<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->


<div id="preloader">
    <div id="status">
        <img src="images/loader.gif" height="60" width="60" alt="">
        <div class="loader">Loading...</div>
    </div>
</div>

<head>



    <!--- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Puremedia</title>
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

    <!-- Script
    =================================================== -->
    <script src="js/modernizr.js"></script>

    <!-- Favicons
     =================================================== -->
    <link rel="shortcut icon" href="favicon.png" >

</head>




<!-- Hero
=================================================== -->
<section id="hero">

    <div class="row hero-content">

        <div class="twelve columns flex-container">

            <div id="hero-slider" class="flexslider">

                <ul class="slides">

                    <!-- Slide -->
                    <li>
                        <div class="flex-caption" >
                            <h1>Time To Fish - интернет магазин по продаже рыбы и морепродуктов</h1>
                            <p><a class="button stroke smoothscroll" href="#portfolio">Перейти</a></p>
                        </div>
                    </li>

                    <!-- Slide -->
                    <li>
                        <div class="flex-caption">
                            <h1>У нас Вы можете не только купить рыбу, но и узнать рецепт по ее приготовлению </h1>
                            <p><a class="button stroke smoothscroll" href="#services">Рецепты</a></p>
                        </div>
                    </li>

                    <!-- Slide -->
                    <li>
                        <div class="flex-caption">
                            <h1>Быстрая доставка в любое время. Хороший сервис и качество продукта</h1>
                            <p><a class="button stroke smoothscroll" href="#journal">Узнать про доставку</a></p>
                        </div>
                    </li>

                </ul>

            </div> <!-- .flexslider -->

        </div> <!-- .flex-container -->

    </div> <!-- .hero-content -->

</section> <!-- #hero -->


<!-- Portfolio
================================================== -->
<section id="portfolio">

    <div class="row section-head">

        <div class="twelve columns">

            <h1 style="font-weight: bold">Топ продаж<span>.</span></h1>
          
            <hr />


        </div>

    </div>

    <div class="row items">

        <div class="twelve columns">

            <div id="portfolio-wrapper" class="bgrid-fourth s-bgrid-third mob-bgrid-half group">
                <?php
                foreach ($hit as $hit){
                    $topP = \app\models\TopP::find()->where(['id'=>$hit->id_top])->one();
                    ?>
                    <div class="bgrid item">
                        <div class="item-wrap">


                            <img src="<?= $topP->image ?>" alt="<?= $topP->name ?>">
                            <div class="overlay">
                                <div class="portfolio-item-meta">
                                    <h5><?= $topP->name ?></h5>
                                    <p><?= $topP->price ?></p>
                                    <p><?= $topP->netto ?></p>

                                    <br>

                                    <a class="button" href="<?= \yii\helpers\Url::toRoute(['addcart','id'=>$topP->id])?>" style="width: 111px">В корзину</a>
                                    
                                </div>
                            </div>

                        </div>
                    </div> <!-- /item -->
               <?php }?>


            </div> <!-- /portfolio-wrapper -->

        </div> <!-- /twelve -->

    </div>  <!-- /row -->

</section> <!-- /Portfolio -->


<!-- Services Section
================================================== -->
<section id="services">

    <div class="row section-head">

        <div class="twelve columns">

            <h1 style="font-weight: bold"><a href="<?= \yii\helpers\Url::toRoute(['/site/about']) ?>">Рецепты<span>.</span></a></h1>

            <hr />


        </div>

    </div>

    <div class="row">

        <div class="twelve columns">

          <div class="resept">
              <div class="five columns" style="padding-right: 0px; margin-right: 0px;">
                <img style="height: 250px" src="<?= $model->image; ?>">
              </div>
              <div class="seven columns" style="background-color: #736092; height: 250px; margin-left: 0px; padding-left: 0px">
                <p style="color: white; font-size: 22pt; font-weight: bold"><?= $model->name; ?></p>
                  <p style="color: white; font-size: 20pt"><?= $model->description; ?></p>
                  <p><a class="button" href="<?= \yii\helpers\Url::toRoute(['recept','id'=>$model->id])?>">Читать далее</a></p>
              </div>
          </div> <!-- /service-list -->

        </div> <!-- /twelve -->

    </div> <!-- /row -->

</section> <!-- /services -->


<!-- About Section
================================================== -->
<section id="about">

    <div class="row section-head">

        <div class="twelve columns">

            <h1 style="font-weight: bold">Каталог<span>.</span></h1>

            <hr />

        </div>

    </div>

    <div class="row about-content">
        <?php
        foreach ($catalog as $catalog){ ?>
            <div class="mob-whole six columns item">

                <h3><?=  $catalog->name ?></h3>
                <a href="<?= \yii\helpers\Url::toRoute(['catalog','id'=>$catalog->id]) ?>">
                <div class="item-wrap">
                    <img src="<?=  $catalog->image ?>">
                    <div class="overlay"> <div class="portfolio-item-meta"></div></div>
                </div>
                </a>
            </div> <!-- /left -->
        <?php }
        ?>


    </div> <!-- /row -->



<br>
    <br>
    <br>
    <br>



</section> <!-- /about -->


<!-- journal
=================================================== -->
<section id="journal">

    <div class="row section-head">

        <div class="twelve columns">

            <h1 style="font-weight: bold">Доставка и оплата<span>.</span></h1>

            <hr />


        </div>

    </div>
    <div class="row section-head">
        <div class="twelve columns">
            <h3>Что бы купить у нас товар, нужно сделать 3 простых шага:</h3>
        </div>
    </div>

    <div class="row">

        <div class="twelve columns">

            <div id="blog-wrapper" class="bgrid-third s-bgrid-half mob-bgrid-whole group">

                <article class="bgrid">

                    <h5 style="text-align: center">Шаг 1</h5>
                    <h3 style="font-weight: bold">Выбрать интересующий вас товар и добавить его в корзину</h3>

                    <img src="images/basket.jpg" class="round">

                </article>

                <article class="bgrid">

                    <h5 style="text-align: center; font-weight: bold">Шаг 2</h5>
                    <h3 style="font-weight: bold">Далее перейти в корзину и оформить заказ</h3>

                    <img src="images/zakaz.jpg" class="round">

                </article>

                <article class="bgrid">

                    <h5 style="text-align: center">Шаг 3</h5>
                    <h3 style="font-weight: bold">Курьер доставит вам ваш заказ. Оплата на месте</h3>

                    <img src="images/delivery.jpg" class="round">

                </article>


            </div> <!-- /blog-wrapper -->

        </div> <!-- /twelve -->

    </div> <!-- /row -->

</section> <!-- /blog -->


<!-- Contact Section
================================================== -->




<!-- Java Script
  ================================================== -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.fittext.js"></script>
<script src="js/backstretch.js"></script>
<script src="js/waypoints.js"></script>
<script src="js/main.js"></script>




</html>