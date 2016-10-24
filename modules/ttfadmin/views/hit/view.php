<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Hit */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hits'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hit-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
      
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
//            'id_top',
            [
                'attribute'=>'product',
                'value'=>$model->getNameProduct(),
//                'format' => ['image'],
            ],
        ],
    ]) ?>

</div>
