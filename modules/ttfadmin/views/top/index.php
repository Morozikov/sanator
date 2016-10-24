<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Top Ps');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="top-p-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Top P'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
    $model = new \app\models\TopP();
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
            'price',
            'netto',
            [
                'attribute' => 'image',
                'format' => 'html',
                'value' => function ($data) {
                    return Html::img(Yii::getAlias('@web').'/'. $data['image'],
                        ['width' => '70px']);
                },
            ],
            [
                'attribute' => 'catalog',
//                'format' => 'html',
                'value' => 'catalog'
            ],
//             'id_catalog',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
