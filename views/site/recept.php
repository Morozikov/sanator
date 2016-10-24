<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\assets\AppAsset;

AppAsset::register($this);
?>

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

    <!-- Script
    =================================================== -->
    <!--    <script src="js/modernizr.js"></script>-->

    <!-- Favicons
     =================================================== -->
    <link rel="shortcut icon" href="favicon.png" >

</head>


<div id="preloader">
    <div id="status">
        <img src="images/loader.gif" height="60" width="60" alt="">
        <div class="loader">Loading...</div>
    </div>
</div>

<!-- Page Title
  ================================================== -->
<section id="page-title">

    <div class="row">

        <div class="twelve columns">

            <h1>Рецепты <span>.</span></h1>


        </div>

    </div> <!-- /row -->

</section> <!-- /page-title -->


<!-- Content
================================================== -->
<section id="content">

    <div class="row">

        <div id="main" class="tab-whole eight columns">

            <article class="entry">

                <header class="entry-header">
                    <h1 class="entry-title">
                        <?= $model->name; ?>
                    </h1>
                </header>

                <div class="entry-content-media">
                    <div class="post-thumb">
                        <img src="<?= $model->image;?>">
                    </div>
                </div>

                <div class="entry-content">
                    <p class="lead">
                        <?= $model->full_text?>
                    </p>
                </div>



            </article> <!-- /entry -->



        </div> <!-- /main -->

        <div class="tab-whole four columns end" id="secondary">

            <aside id="sidebar">

                <div class="widget widget_categories">

                    <h5 class="widget-title" style="font-weight: bolder">Другие рецепты</h5>
                    <ul class="link-list group">
                        <li><a href="<?= \yii\helpers\Url::toRoute(['about'])?>">Все</a></li>
                        <?php $recerpt = \app\models\Recept::find()->all();
                        $i=0;
                        foreach ($recerpt as $recept){
                            $i++;
                            if ($i<=10){
                                $href = \yii\helpers\Url::toRoute(['recept','id'=>$recept->id]);
                                echo '  <li><a href="'.$href.'">'.$recept->name.'</a></li>';
                            }
                        }

                        ?>


                    </ul>

                </div> <!-- /widget_categories -->




            </aside> <!-- /sidebar -->

        </div> <!-- /secondary -->

    </div> <!-- /row -->

</section> <!-- /content -->

