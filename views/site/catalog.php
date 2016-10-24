<?php
use yii\widgets\LinkPager;


?>


<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->


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

            <h1><?= $h1 ?><span>.</span></h1>


        </div>

    </div> <!-- /row -->

</section> <!-- /page-title -->
<!-- Portfolio
================================================== -->
<section id="portfolio" style="padding-top: 20px">
    <div class="row">
        <?php
        foreach ($models as $model) { ?>
            <div class="col s4">
                <div class="card">
                    <div class="card-image">
                        <img src="<?= $model->image ?>">
                        <span class="card-title"><?= $model->name ?></span>
                    </div>
                    <div class="card-content">
                        <p><span>Цена:</span><?= $model->price?></p>
                        <p><?= $model->netto?></p>
                    </div>
                    <div class="card-action">

                        <a class="button" href="<?= \yii\helpers\Url::toRoute(['addcart','id'=>$model->id])?>">В корзину</a>
                    </div>
                </div>
            </div>
        <?php }
        echo LinkPager::widget([
            'pagination' => $pages,
        ]);
        ?>


    </div>

</section> <!-- /Portfolio -->




















</html>