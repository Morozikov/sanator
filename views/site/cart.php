<?php
use yii\widgets\LinkPager;

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

            <h1>Корзина<span>.</span></h1>


        </div>

    </div> <!-- /row -->

</section> <!-- /page-title -->
<!-- Portfolio
================================================== -->
<section id="portfolio" style="padding-top: 20px">
    <div style="text-align: center"><?= CartInformer::widget(['htmlTag' => 'h7', 'text' => '{c} товаров на {p}']); ?></div>

    <div class="row">

        <?php
       $elements = yii::$app->cart->elements;
       $cartElement = \pistol88\cart\models\CartElement::find()->all();

      foreach ($elements as $element){ ?>
          <?php $topP = \app\models\TopP::findOne($element->item_id); ?>
             <div class="col s4">
                 <div class="card">
                     <div class="card-image">
                         <img src="<?= $topP->image ?>">
                         <span class="card-title"><?= $topP->name ?></span>
                     </div>
                     <div class="card-content">
                         <p><span>Цена:</span><?= $element->price?></p>
                         <p><?= $topP->netto ?></p>

                         <p><span>Количество:</span><input type="number"  value="<?= $element->count?>">
                         </p>
                     </div>
                     <div class="card-action">

                         <a class="button" href="">Убрать из корзины</a>
                     </div>
                 </div>
             </div>




      <?php }

       ?>


    </div>

</section> <!-- /Portfolio -->




















</html>