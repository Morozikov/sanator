<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TopP */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Top Ps'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="top-p-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'price',
            'netto',
            [
                'attribute'=>'Image',
                'value'=>$model->image,
                'format' => ['image'],
            ],
            [
                'attribute'=>'Catalog',
                'value'=>$model->getCatalog($model->id_catalog),
//                'format' => ['image'],
            ],
//            'id_catalog',
        ],
    ]) ?>

</div>
