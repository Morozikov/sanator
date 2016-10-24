<?php
use yii\helpers\Url;
?>

<div class="appttfadmin-default-index">
    <div class="row">
        <div class="col-md-3">
            <div class="info-box">
                <!-- Apply any bg-* class to to the icon to color it -->
                <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text"><a href="<?= Url::toRoute('catalog/index')?>">Каталог</a></span>
                    <span class="info-box-number"></span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div>
        <div class="col-md-3">
            <div class="info-box">
                <!-- Apply any bg-* class to to the icon to color it -->
                <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text"><a href="<?= Url::toRoute('recept/index')?>">Рецепты</a></span>
                    <span class="info-box-number"></span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div>
        <div class="col-md-3">
            <div class="info-box">
                <!-- Apply any bg-* class to to the icon to color it -->
                <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text"><a href="<?= Url::toRoute('hit/index')?>">Топ продаж</a></span>
                    <span class="info-box-number"></span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div>
        <div class="col-md-3">
            <div class="info-box">
                <!-- Apply any bg-* class to to the icon to color it -->
                <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text"><a href="<?= Url::toRoute('top/index')?>">Продукция</a></span>
                    <span class="info-box-number"></span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div>

    </div>

</div>
